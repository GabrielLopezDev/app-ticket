<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Livewire\Component;

class ShowQueues extends Component
{
    protected $listeners = ['render'];

    public function render()
    {
        $queue_1 = $this->queue_1 = Ticket::where('queue', 1)->orderBy('created_at')->get();
        $queue_2 = $this->queue_2 = Ticket::where('queue', 2)->orderBy('created_at')->get();

        return view('livewire.show-queues', compact('queue_1'));
    }
}
