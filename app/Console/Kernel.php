<?php

namespace App\Console;

use App\Mail\Boletin;
use App\Models\Destinatario;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Mail;

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
        // $schedule->command('inspire')
        //          ->hourly();
        $schedule->call(function (){
            $users=Destinatario::all();

            //insertar usuarios de base de datos para poder el boletin cada mes//
            //$users=['paul.frankpc@gmail.com','sergioaqs17@gmail.com','anthonylf797@gmail.com'];
            //funcion para enviar el correo
            //me envia el correo dependiendo de las personas
            foreach ($users as $user){
                $array[]=$user->correo;
            }
                /*Mail::to('paul.frankpc@hotmail.com')->cc($array)->send(new \App\Mail\Boletin());*/
            Mail::to('paul.frankpc@gmail.com')->send(new \App\Mail\Boletin());
            })->everyMinute();
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
