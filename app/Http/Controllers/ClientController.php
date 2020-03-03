<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //agregamos para consultar por usuario

class ClientController extends Controller
{
    public function index(){
        /**
         * Consultamos el cliente registrado por el usuario
         */
        $clients = \App\Client::where('user_id', Auth::user()->id)->get();
        //mostramos la vista y pasamos la consulta
        return view('client', compact('clients'));
    }
}
