<?php

namespace App\Console\Commands;

use App\Models\Tarefa;
use Illuminate\Console\Command;

class TarefaCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tarefa:create'; //nome tarefa
    

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description: php artisan make:command TarefaCommand';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       // return Command::SUCCESS;
        $tarefa = new Tarefa();
        $tarefa->save();
    }
}
