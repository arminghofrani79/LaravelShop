<?php

namespace App\Listeners;

use App\Events\OrderPlaced;
use App\Jobs\SendOrderConfirmationMail;


class SendOrderConfirmation
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
    public function handle(OrderPlaced $event): void
    {
        SendOrderConfirmationMail::dispatch($event->order);
    }
}
