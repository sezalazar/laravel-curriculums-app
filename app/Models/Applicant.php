<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Services\ApplicantService;



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
            'email' => 'required|unique:applicants,email,' . $applicantID,
            'dateOfBirth' => 'required',
            'ciudad' => 'required',
            'provincia' => 'required',
            'cp' => 'required',
            'street' => 'required',
            'streetNbr' => 'required',
            'phone.*' => 'required|min:9|regex:/^([0-9\s\-\+\(\)]*)$/',
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
            'name' => $request['name'],
            'email' => $request['email'],
            'street' => $request['street'],
            'streetNbr' => $request['streetNbr'],
            'city' => $request['ciudad'],
            'piso' => $request['piso'],
            'depto' => $request['depto'],
            'provincia' => $request['provincia'],
            'cp' => $request['cp'],
            'dateOfBirth' => $request['dateOfBirth'],
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

        foreach ($request['phone'] as $phone) {
            $cv->phones()->save(new Phone(["phone" => $phone]));
        }

    }


    public function updateApplicantData($id, $request):void{
        // isset($request['driverLicence']) ? $driverLicence = 1 : $driverLicence = 0;
        isset($request['carOwner']) ? $carOwner = 1 : $carOwner = 0;
        isset($request['carrerLevel']) ? $carrerLevel = $request['carrerLevel'] : $carrerLevel = 0;
        isset($request['carrerAdvance']) ? $carrerAdvance = $request['carrerAdvance'] : $carrerAdvance = 0;

        $applicantService = new ApplicantService();

        // TODO: send only the driverLicence field
        $driverLicence = $applicantService->setDriverLicence($request);

        $applicant = Applicant::find($id);
        $data = [
            'tipo' => $request['tipo'],
            'dni' => $request['dni'],
            'name' => $request['name'],
            'email' => $request['email'],
            'street'  => $request['street'],
            'streetNbr' => $request['streetNbr'],
            'piso' => $request['piso'],
            'depto' => $request['depto'],
            'city' => $request['ciudad'],
            'provincia' => $request['provincia'],
            'cp' => $request['cp'],
            'dateOfBirth' => $request['dateOfBirth'],
            'referredEmplid' => $request['referredEmplid'],
            'referredName' => $request['referredName'],
            'driverLicence' => $driverLicence,
            'carOwner' => $carOwner,
            'carrerSelected' => $request['carrerSelected'],
            'carrerLevel' => $carrerLevel,
            'carrerAdvance' => $carrerAdvance,
        ];

        if (!empty(request()->file('file'))){
            $fileData = [
                'filename' => $this->setFileName(request()->file('file')->getClientOriginalName()),
                'file_path' => storage_path(),
            ];
            $data = $data + $fileData;
        }

        $applicant->update($data);

        foreach ($request['phone'] as $phone) {
            $applicant->phones()->save(new Phone(["phone" => $phone]));
        }

    }
}
