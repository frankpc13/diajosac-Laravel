<?php

namespace App\Mail;

use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;

class Boletin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $productos=Producto::inRandomOrder()->take(4)->get();
        $marca=Marca::inRandomOrder()->take(4)->get();
        return $this->view('mail.boletin',['marca'=>$marca])->with('producto',$productos);
    }
}
