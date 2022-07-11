<?php

namespace App\Observers;

use App\Models\Phone;

class PhoneObserver
{
    /**
     * Handle the Phone "created" event.
     *
     * @param  \App\Models\Phone  $phone
     * @return void
     */
    public function created(Phone $phone)
    {
        //
    }

    /**
     * Handle the Phone "updated" event.
     *
     * @param  \App\Models\Phone  $phone
     * @return void
     */
    public function updated(Phone $phone)
    {
        dd($phone);
    }

    /**
     * Handle the Phone "deleted" event.
     *
     * @param  \App\Models\Phone  $phone
     * @return void
     */
    public function deleted(Phone $phone)
    {
        //
    }

    /**
     * Handle the Phone "restored" event.
     *
     * @param  \App\Models\Phone  $phone
     * @return void
     */
    public function restored(Phone $phone)
    {
        //
    }

    /**
     * Handle the Phone "force deleted" event.
     *
     * @param  \App\Models\Phone  $phone
     * @return void
     */
    public function forceDeleted(Phone $phone)
    {
        //
    }
}
