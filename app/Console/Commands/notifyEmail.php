<?php

namespace App\Console\Commands;

use App\Mail\ConfirmReservation;
use App\Mail\OrderStarted;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class notifyEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notifyEmail:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email to users reverse house and confirm reverse';

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
        $emails = DB::select('select * from users');
        foreach ($emails as $email) {
            $x = DB::select('select * from reverses where idUser=? and confirm=1', [$email->id]);
            if ($x != null) {
                Mail::To($email->email)->send(new ConfirmReservation($x));
            }
        }
    }
}
