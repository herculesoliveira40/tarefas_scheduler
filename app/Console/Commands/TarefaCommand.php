<?php

namespace App\Console\Commands;

use App\Models\Tarefa;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;


class TarefaCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
   // protected $signature = 'tarefa:create'; //nome tarefa
    protected $signature = 'c:saveBidPriceOnDataBase'; //nome tarefa
    

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
        $ur = Http::get('https://api.binance.com/api/v3/ticker/24hr');
        $apiArray = $ur->json([11]); // position BTCUSDT 

       // return Command::SUCCESS;
        $tarefa = new Tarefa();
        $tarefa['name'] = $apiArray['symbol'];
        $tarefa['bidPrice'] = $apiArray['bidPrice'];
        $tarefa->save();
    }
}
