<?php

namespace App\Listeners;

use App\Notifications\NewBookAddedNotification;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use Illuminate\Queue\InteractsWithQueue;

class NewBookAddedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $users = User::query()->where('isAdmin','=',0)->get();
        Notification::send($users, new NewBookAddedNotification($event->book));
    }
}
