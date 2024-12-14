<?php

namespace App\Observers;

use App\Models\User;
use App\Notifications\WelcomeNotification;
use App\Supports\Helpers\HelperClass;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        $code = HelperClass::generateCode($user->id);
        $user->notify(new WelcomeNotification($code, $user->name));
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}