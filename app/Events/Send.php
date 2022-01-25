<?php

namespace App\Events;


use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Send implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $user;
    public $x=2;
    public $id;
    public $image;
    public $time;
    public $description;
    public function __construct(User $user,$description,$time,$id)
    {
       $this->description=$description;
        $this->user = $user->name;
        $this->time =$time;
        $this->image = $user->image;
        $this->id =$id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('my-channel.'.$this->x);
    }

    public function broadcastAs()
    {
        return 'my-event';
    }
}
