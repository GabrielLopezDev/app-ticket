<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Livewire\Component;

class CreateTicket extends Component
{
    public $ticket_number;
    public $name;

    protected $rules = [
        'ticket_number' => 'required|unique:tickets,ticket_number|min:0',
        'name' => 'required|min:3|max:255',
    ];

    public function render()
    {
        return view('livewire.create-ticket');
    }

    public function save()
    {
        $this->validate();

        $queue_1 = Ticket::where('queue', '1')->count();
        $queue_2 = Ticket::where('queue', '2')->count();

        // Calcular a que cola se asignará el ticket
        $queue = $queue_1 * 2 > $queue_2 * 3 ? 2 : 1;

        Ticket::create([
            'ticket_number' => $this->ticket_number,
            'name' => $this->name,
            'queue' => $queue,
        ]);

        $this->reset([
            'ticket_number',
            'name',
        ]);

        $this->emit('alert-create-ticket', '¡El ticket se creó correctamente!');
        $this->emitTo('show-queues', 'render');
    }
}
