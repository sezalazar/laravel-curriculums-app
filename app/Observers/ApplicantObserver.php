<?php

namespace App\Observers;

use App\Models\Applicant;
use App\Jobs\SendApplicantUpdatedJob;

class ApplicantObserver
{
    /**
     * Handle the Applicant "created" event.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return void
     */
    public function created(Applicant $applicant)
    {
        if (!empty(request()->file('file'))){
            request()->file('file')->move(public_path('uploads'), $applicant->filename);
        }
    }

    /**
     * Handle the Applicant "updated" event.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return void
     */
    public function updated(Applicant $applicant)
    {
        if (!empty(request()->file('file'))){
            request()->file('file')->move(public_path('uploads'), $applicant->filename);
        }

        // dispatch(new SendApplicantUpdatedJob($applicant));
    }

    /**
     * Handle the Applicant "deleted" event.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return void
     */
    public function deleted(Applicant $applicant)
    {
        //
    }

    /**
     * Handle the Applicant "restored" event.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return void
     */
    public function restored(Applicant $applicant)
    {
        //
    }

    /**
     * Handle the Applicant "force deleted" event.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return void
     */
    public function forceDeleted(Applicant $applicant)
    {
        //
    }
}
