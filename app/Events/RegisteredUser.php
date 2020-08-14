<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Support\Facades\Mail;


class RegisteredUser extends Event
{
    use SerializesModels;

    public $datos;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($datos)
    {
        $this->datos=$datos;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
