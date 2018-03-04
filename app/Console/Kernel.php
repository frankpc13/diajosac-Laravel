<?php

namespace App\Console;

use App\Models\Destinatario;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Mail;
use App\Mail\Boletin as Boletin;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function (){
            $users=Destinatario::all();

            //insertar usuarios de base de datos para poder el boletin cada mes//
            //funcion para enviar el correo
            //me envia el correo dependiendo de las personas
            foreach ($users as $user){
                Mail::to($user->correo)->send(new \App\Mail\Boletin());
            }
        })->monthlyOn(21,'15:35');
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
