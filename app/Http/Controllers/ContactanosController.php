<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\GestionMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    //Nos mostrará el formulario de envío de correo
    public function index(){
        return view('contactanos.index');
    }
    
    //Confirmación del envío
    public function store(Request $request){
        
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required',
        ]);

        $correo = new GestionMailable($request->all());
        Mail::to('elpinzoncanario@gmail.com')->send($correo);
        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');

    }
}
