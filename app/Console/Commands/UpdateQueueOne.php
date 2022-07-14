<?php

namespace App\Console\Commands;

use App\Events\UpdateQueue;
use App\Models\Ticket;
use Illuminate\Console\Command;

class UpdateQueueOne extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:queueone';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Eliminar al primer cliente atendido de la cola 1';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = Ticket::where('queue', 1)->orderBy('created_at', 'ASC')->first();
        $client->delete();
    }
}
