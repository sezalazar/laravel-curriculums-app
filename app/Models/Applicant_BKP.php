<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;



class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'dni'
        , 'name'
        , 'email'
        , 'street'
        , 'streetNbr'
        , 'city'
        , 'provincia'
        , 'carrerSelected'
        , 'carrerLevel'
        , 'carrerAdvance'
        , 'cp'
        , 'dateOfBirth'
        , 'driverLicence'
        , 'referredEmplid'
        , 'referredName'
        , 'file_path'
        , 'filename'
        , 'user'
        , 'tipo'
        , 'piso'
        , 'depto'
   ];
    public $sortable = ['dni', 'name', 'email', 'marStatus', 'dateOfBirth'];


    //Relationships
    public function phones(){
        return $this->hasMany(Phone::class,'applicant_id','id');
    }


    //Functions called on the controller
    public function validateApplicantData($request, $applicantID){

        $sValidationRules = [
            'tipo' => 'required',
            'dni' => 'required|integer|min:0|max:99999999|unique:applicants,dni,' . $applicantID,
            // 'nombre' => 'required',
            'email' => 'required|unique:applicants,email,' . $applicantID,
            // 'phone' => 'required',
            'fechaDeNacimiento' => 'required',
            'ciudad' => 'required',
            'provincia' => 'required',
            'códigoPostal' => 'required',
            'calle' => 'required',
            'númeroCalle' => 'required',
            // 'phone.*' => 'required|min:9|regex:/^([0-9\s\-\+\(\)]*)$/',
        ];

        $sErrorsMessage = [
            'nombre.required' => 'El nombre es obligatorio'
            , 'phone.*.required' => 'El teléfono es obligatorio'
            , 'phone.*.min' => 'El teléfono debe tener al menos 9 caracteres'
        ];


        $validator = Validator::make($request->all(), $sValidationRules, $sErrorsMessage);

        return $validator;
    }




    public function validateApplicantFileData($request, $id):void{
        if ($id == 1){
            $request->validate([
                'file' => 'required|mimes:pdf,doc,docx,odt|max:5048',
            ]);
        }
        if ($id == 2){
            $request->validate([
                'file' => 'mimes:pdf,doc,docx,odt|max:5048',
            ]);
        }
    }





    public function getApplicantId(){
        $applicantID = 0;
        if (Auth::check()) {
            $applicantID = Applicant::where('user', Auth::user()->id)->get();
        }

        return $applicantID;
    }


    public function setFileName($clientFileName){
        $time = date("Y-m-d h:i:s a", time());
        $time = str_replace(':', '_', $time);

        $fileName = $time.'.'.$clientFileName;

        return $fileName;
    }

    public function createApplicantData($request):void{
        // dd(request()->file('file'));
        isset($request['driverLicence']) ? $driverLicence = 1 : $driverLicence = 0;
        isset($request['carOwner']) ? $carOwner = 1 : $carOwner = 0;
        isset($request['carrerLevel']) ? $carrerLevel = $request['carrerLevel'] : $carrerLevel = 0;
        isset($request['carrerAdvance']) ? $carrerAdvance = $request['carrerAdvance'] : $carrerAdvance = 0;
        // dd($request);

        $cv = Applicant::create([
            'tipo' => $request['tipo'],
            'dni' => $request['dni'],
            'name' => $request['nombre'],
            'email' => $request['email'],
            'street' => $request['calle'],
            'streetNbr' => $request['númeroCalle'],
            'city' => $request['ciudad'],
            'piso' => $request['piso'],
            'depto' => $request['depto'],
            'provincia' => $request['provincia'],
            'cp' => $request['códigoPostal'],
            'dateOfBirth' => $request['fechaDeNacimiento'],
            'referredEmplid' => $request['referredEmplid'],
            'referredName' => $request['referredName'],
            'driverLicence' => $driverLicence,
            'carOwner' => $carOwner,
            'carrerSelected' => $request['carrerSelected'],
            'carrerLevel' => $carrerLevel,
            'carrerAdvance' => $carrerAdvance,
            'filename' => $this->setFileName(request()->file('file')->getClientOriginalName()),
            'file_path' => storage_path(),
            'user' => Auth::user()->id,
        ]);

        if (!empty(request()->file('file'))){
            request()->file('file')->move(public_path('uploads'), $cv->filename);
        }

        foreach ($request['phone'] as $phone) {
            $cv->phones()->save(new Phone(["phone" => $phone]));
        }

    }


    public function updateApplicantData($id, $request):void{
        // dd(request()->file('file'));
        isset($request['driverLicence']) ? $driverLicence = 1 : $driverLicence = 0;
        isset($request['carOwner']) ? $carOwner = 1 : $carOwner = 0;
        isset($request['carrerLevel']) ? $carrerLevel = $request['carrerLevel'] : $carrerLevel = 0;
        isset($request['carrerAdvance']) ? $carrerAdvance = $request['carrerAdvance'] : $carrerAdvance = 0;


        $cv = Applicant::find($id);
        $cv->tipo = $request['tipo'];
        $cv->dni = $request['dni'];
        $cv->name = $request['nombre'];
        $cv->email = $request['email'];
        $cv->street = $request['calle'];
        $cv->streetNbr = $request['númeroCalle'];
        $cv->piso = $request['piso'];
        $cv->depto = $request['depto'];
        $cv->city = $request['ciudad'];
        $cv->provincia = $request['provincia'];
        $cv->cp = $request['códigoPostal'];
        $cv->dateOfBirth = $request['fechaDeNacimiento'];
        $cv->referredEmplid = $request['referredEmplid'];
        $cv->referredName = $request['referredName'];
        $cv->driverLicence = $driverLicence;
        $cv->carOwner = $carOwner;
        $cv->carrerSelected = $request['carrerSelected'];
        $cv->carrerLevel = $carrerLevel;
        $cv->carrerAdvance = $carrerAdvance;
        if (!empty(request()->file('file'))){
            $cv->filename = $this->setFileName(request()->file('file')->getClientOriginalName());
            $cv->file_path = storage_path();
        }
        $cv->save();

        if (!empty(request()->file('file'))){
            request()->file('file')->move(public_path('uploads'), $cv->filename);
        }

        foreach ($request['phone'] as $phone) {
            $cv->phones()->save(new Phone(["phone" => $phone]));
        }

    }
}
