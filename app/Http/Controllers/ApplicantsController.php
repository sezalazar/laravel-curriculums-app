<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Applicant;
use App\Models\Phone;

use Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Requests\FormDataRequest;
use App\Jobs\SendApplicantUpdatedJob;
use App\Services\ApplicantService;

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
        $user = DB::table('users')->where('id', '=', Auth::user()->id)->select('email','name')->get();
        return view('applicants/create',
            ['provincias' => $provincias,
            'user' => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\FormDataRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store(FormDataRequest $request)
    // public function store(Request $request)
    {
        $modelApplicant = new Applicant;
        $modelPhone = new Phone;
        $modelApplicant->validateApplicantFileData($request, 1);
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
        // TODO: Create one to one relationship between user and applicant
        try{
            $CV = Applicant::where('user', Auth::id())->firstOrFail();
            $provincias = DB::table('provincias')->orderBy('nombre')->get();
            $localidad = DB::table('localidades')
                        ->join('applicants', 'localidades.id', '=', 'applicants.city')
                        ->join('provincias', 'localidades.provincia', '=', 'provincias.nombre')
                        ->where('applicants.user', "=", Auth::user()->id)
                        ->select('localidades.id','localidades.nombre')
                        ->get();
            $phones = Applicant::find(Auth::id())->phones;
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
     * @param  \Illuminate\Http\FormDataRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormDataRequest $request, int $id)
    {
        $applicant = Applicant::findOrFail($id);
        $modelPhone = new Phone;
        $applicant->validateApplicantFileData($request, 2);
        $modelPhone->deletePhones($id);
        $applicant->updateApplicantData($id, $request->all());


        $applicantID = $applicant->getApplicantId();
        session()->flash("success", "Su información ha sido actualizada con éxito");
        return view('/home')->with('success','Su curriculum ha sido cargado satisfactoriamente.')->with(compact('applicantID'));
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getstates($id)
    {
        // dd(url()->previous());
        $cities = DB::table("localidades")
                    ->orderby("nombre")
                    ->where("provincia", "=", $id)
                    ;
        $cities = $cities->pluck("nombre", "id");


        return json_encode($cities);

        // return json_encode($cities);
    }
}
