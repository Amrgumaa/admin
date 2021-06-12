<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Logout;
use IlluminateAuthEventsLogout;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogoutSuccesfull
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
     * @param  IlluminateAuthEventsLogout  $event
     * @return void
     */
    public function handle(Logout $event)
    {
         $event->subject= 'user';
      $event->description= 'logout' ;
         activity($event->subject)
               ->log($event->description);
    }
}
