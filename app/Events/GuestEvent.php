<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use App\Models\Token;
use App\Models\Guest;

class GuestEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */

    // set connection to redis
    public $connection = 'redis';

    /**
     * Create a new event instance.
     *
     * @return void
     */

    // set queue default
    public $queue = 'default';


    public function __construct()
    {
        //
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('GuestChannel');
    }

     public function broadcastAs()
    {
        return 'GuestMessage';
    }

    /*
     * Get the data to broadcast.
     *
     * @return array
     */
    public function broadcastWith()
    {
        $guests = Guest::all();
        $guest_decode = json_decode($guests, true);
        foreach ($guest_decode as $key => $value) {
            return [
                'message' => json_encode($value['name'])
            ];
        }
    }
}
