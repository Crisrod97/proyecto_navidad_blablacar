<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\GestionMailable;
use Illuminate\Support\Facades\Mails;

class ContactanosController extends Controller
{
    //Nos mostrará el formulario de envío de correo
    public function index(){
        return view(contactanos.index);
    }
    
    //Confirmación del envío
    public function store(){
        $correo = new GestionMailable;
        Mail::to('elpinzoncanario@gmail.com')->send($correo);
        return view('welcome');

    }
}
