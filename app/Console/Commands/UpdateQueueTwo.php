<?php

namespace App\Console\Commands;

use App\Models\Ticket;
use Illuminate\Console\Command;

class UpdateQueueTwo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:queuetwo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Eliminar al primer cliente atendido de la cola 2';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = Ticket::where('queue', 2)->orderBy('created_at', 'ASC')->first();
        $client->delete();
    }
}
