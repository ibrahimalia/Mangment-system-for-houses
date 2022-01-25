<?php

namespace App\Console\Commands;



use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;


class clearHouses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clearHouses:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'clear houses automatically every three days';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
      $update=DB::update('update houses,reverses set reserve = "Not reverse Yet" where houses.id = reverses.idHouse and confirm = 0;');
      $delete=DB::delete('delete from reverses where confirm = 0');
    }

}
