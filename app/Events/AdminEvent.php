<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class AdminEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */

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
        return new Channel('AdminChannel');
    }

     public function broadcastAs()
    {
        return 'AdminPage';
    }

    /*
     * Get the data to broadcast.
     *
     * @return array
     */
    public function broadcastWith()
    {
        $admin = User::all();

        return [
            'message' => 'tes'
        ];
    }


}
