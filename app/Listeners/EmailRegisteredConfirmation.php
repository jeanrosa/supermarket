<?php

namespace App\Listeners;

use App\Events\RegisteredUser;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
class EmailRegisteredConfirmation
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
     * @param  RegisteredUser  $event
     * @return void
     */
    public function handle(RegisteredUser $event)
    {
        $dato=$event->datos;

        Mail::send('emails.success',$dato, function($message) use ($dato)
        {
            //remitente
            $message->from(env('MAIL_USERNAME'));

            //receptor
            foreach($dato as $dats){
            $message->to($dats['email'],$dats['nombre']);
            }
            //asunto
            $message->subject('Bienvenido a supermarket ccl');
        });

    }
}
