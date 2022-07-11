<?php

namespace App\Services;
use App\Models\User;
use Illuminate\Http\Request;

class ApplicantService
{
    function setDriverLicence($request){
        isset($request['driverLicence']) ? $driverLicence = 1 : $driverLicence = 0;
        return $driverLicence;
    }
}
