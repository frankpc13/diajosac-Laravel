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

            return redirect()->intended('/admin/lista');
        }
        $error="La contraseña o usuario es incorrecto";
        return view('login')->with('error',$error);
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
        return redirect()->to("/");
    }
}
