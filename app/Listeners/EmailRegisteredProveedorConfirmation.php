<?php

namespace App\Listeners;

use App\Events\RegisteredProveedor;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailRegisteredProveedorConfirmation
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
     * @param  RegisteredProveedor  $event
     * @return void
     */
    public function handle(RegisteredProveedor $event)
    {
        //
    }
}
