<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    //
    public function login(Request $request){
        if(Auth::attempt(['username'=>$request->get('username'),'password'=>$request->get('password')])){
            $user=Auth::user();

            return redirect()->intended('lista');
        }
        echo "<h4>La contraseña o usuario es incorrecto</h4>";
    }

    protected function guard(){
        return Auth::guard('guard-name');
    }

    public function cerrarSesion(){
        if(Auth::check()){
            //cerrar sesión
            Auth::logout();
            return redirect()->intended('/');
        }
    }
}
