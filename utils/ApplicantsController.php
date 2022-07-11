<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Applicant;
use App\Models\Phone;

use Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ApplicantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cvs = Applicant::paginate(50);
        return view('applicants/index', ['cvs' => $cvs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provincias = DB::table('provincias')->orderBy('nombre')->get();
        $localidades = DB::table('localidades')->get();
        return view('applicants/create', ['provincias' => $provincias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $modelApplicant = new Applicant;
        $modelPhone = new Phone;
        $applicantID = $modelApplicant->getApplicantId();
        $validator = $modelApplicant->validateApplicantData($request, $applicantID);
        if ($validator->fails()) // on validator found any error
        {
            // pass validator object in withErrors method & also withInput it should be null by default
            return redirect('applicants/create')->withErrors($validator)->withInput();
        }
        $modelApplicant->validateApplicantFileData($request, 1);
        // $modelPhone->validatePhoneData($request);
        // $modelPhone->setPhones($request->input('dni'), $request->input('phone'));
        $modelApplicant->createApplicantData($request->all());
        $applicantID = $modelApplicant->getApplicantId();

        session()->flash("success", "Su información ha sido cargada con éxito");
        return view('/home')->with(compact('applicantID'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $applicantID = Applicant::where('user', $id)->exists();
        $applicantID = Applicant::where('user', $id)->get();
        return view('/home')->with(compact('applicantID'));
    }


    /**
     * Display if user has uploaded a cv.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showbutton()
    {
        $applicantID = 0;
        if (Auth::check()) {
            $exists = Applicant::where('user', Auth::user()->id)->exists();
            if ($exists)
                $applicantID = Applicant::where('user', Auth::user()->id)->get();
        }
        return view('/home')->with(compact('applicantID'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            // TODO: Create one to one relationship between user and applicant
            $CV = Applicant::where('user', Auth::user()->id)->firstOrFail();
            $provincias = DB::table('provincias')->orderBy('nombre')->get();
            $localidad = DB::table('localidades')
                        ->join('applicants', 'localidades.id', '=', 'applicants.city')
                        ->where('applicants.user', "=", Auth::user()->id)
                        ->select('localidades.id','localidades.nombre')
                        ->get();
            $phones = Applicant::find(Auth::user()->id)->phones;

            return view('/applicants/edit'
                , ['cv'=>$CV,
                'phones'=>$phones,
                'provincias'=>$provincias,
                'localidad'=>$localidad
                ]
            );
        }catch (ModelNotFoundException $ex) {
            // TODO: add error message
        }



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $modelApplicant = new Applicant;
        $modelPhone = new Phone;
        $applicantID = $modelApplicant->getApplicantId();
        $validator = $modelApplicant->validateApplicantData($request, $id);
        if ($validator->fails()) // on validator found any error
        {
            // pass validator object in withErrors method & also withInput it should be null by default
            return redirect('applicants/'.Auth::user()->id.'/edit')->withErrors($validator)->withInput();
        }
        else{
            $applicant = Applicant::where('dni', $request['dni'])->get();
            $modelApplicant->validateApplicantFileData($request, 2);
            $modelPhone->deletePhones($id);
            $modelApplicant->updateApplicantData($id, $request->all());


            session()->flash("success", "Su información ha sido actualizada con éxito");
            return view('/home')->with('success','Su curriculum ha sido cargado satisfactoriamente.')->with(compact('applicantID'));
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session()->flash("success", "Su información ha sido actualizada con éxito");
        return view('/home')->with('success','Su curriculum ha sido cargado satisfactoriamente.')->with(compact('applicantID'));
    }

    public function getstates($id)
    {
        // dd(url()->previous());
        $cities = DB::table("localidades")
                    ->orderBy("nombre")
                    ->where("provincia", "=", $id)
                    // ->pluck("nombre", "id")
                    ;
        $cities = $cities->pluck("nombre");
        return json_encode($cities);
    }
}
