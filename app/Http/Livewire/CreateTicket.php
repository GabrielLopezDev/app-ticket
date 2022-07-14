<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Livewire\Component;

class CreateTicket extends Component
{
    public $id_ticket;
    public $name;

    protected $rules = [
        'id_ticket' => 'required|unique:tickets,id|min:0',
        'name' => 'required|min:3|max:255',
    ];

    public function render()
    {
        return view('livewire.create-ticket');
    }

    public function save()
    {
        $this->validate();

        $queue_1 = Ticket::where('queue', '1')->get();
        $queue_2 = Ticket::where('queue', '2')->get();

        // Calcular a que cola se asignará el ticket
        $queue = count($queue_1) * 2 > count($queue_2) * 3 ? 2 : 1;

        Ticket::create([
            'id' => $this->id_ticket,
            'name' => $this->name,
            'queue' => $queue,
        ]);

        $this->reset([
            'id_ticket',
            'name',
        ]);

        $this->emit('alert-create-ticket', '¡El ticket se creó correctamente!');
        $this->emitTo('show-queues', 'render');
    }
}
