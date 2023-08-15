<?php

namespace App\Listeners;

use App\Events\RequestReceived;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RequestReceivedNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(RequestReceived $event): void
    {
        //
          Log::info('Request Received by
                  '.$event->request->ip());
    }
}
