<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticable;

class Usuario extends Authenticable
{
    protected $table="usuario";
    public $timestamps=false;
    protected $hidden=['password'];
    public function getAuthPassword() {
        return $this->password;
    }
}
