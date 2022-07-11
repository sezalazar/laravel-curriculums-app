<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Phone extends Model
{
    // protected $table = 'applicant-phones';

    protected $fillable = [
        'phone', 'applicant_id'
    ];

    public $timestamps = false;


    //Relationships
    public function applicants(){
        return $this->belongsTo(Applicant::class, 'id', 'applicant_id');
    }

    //Functions called on the controller

    public function deletePhones($id):void {
        $applicant = Applicant::find($id);
        $applicant->phones()->delete();
    }
}
