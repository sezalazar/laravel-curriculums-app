<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Applicant;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $applicantID = 0;
        if (Auth::check()) {
            $exists = Applicant::where('user', Auth::user()->id)->exists();
            if ($exists)
                $applicantID = Applicant::where('user', Auth::user()->id)->get();
        }
        return view('home')->with(compact('applicantID'));
    }
}
