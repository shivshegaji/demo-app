<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class CarTimer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cartimer:getsum {time}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command perform the addtion of time digits';

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
     * @return int
     */
    public function handle()
    {

        $time = $this->argument("time");


        if($time <= 0 || $time > 999 ){
            $this->error("Time must be greater than 0 and less than 999");
            return 1;
        }
        $res = \carTime($time);

        $this->info(json_encode(['current_time' =>$res]));





    }
}
