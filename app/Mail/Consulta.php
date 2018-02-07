<?php

namespace App\Mail;

use App\Models\Destinatario;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Consulta extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $correo;
    public $nombre;
    public $apellido;
    public $telefono;
    public $consulta;
    public $empresa;

    public function __construct($correo,$nombre,$apellido,$telefono,$consulta,$empresa)
    {
        //
        $this->consulta=$consulta;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->telefono=$telefono;
        $this->correo=$correo;
        $this->empresa=$empresa;

        $nuevo=new Destinatario();
        $nuevo->nombre=$nombre;
        $nuevo->apellido=$apellido;
        $nuevo->telefono=$telefono;
        $nuevo->empresa=$empresa;
        $nuevo->correo=$correo;
        $nuevo->save();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.correo');
    }
}
