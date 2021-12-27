<?php

namespace App\Http\Controllers;

use App\Models\Pasajero;
use Illuminate\Http\Request;
use App\Rules\Validaciondni;

class PasajeroController extends Controller
{

    public function imprimir(){
        $pasajeros = Pasajero::all();
        $pdf = \PDF::loadView('pdfs.pasajeros_pdf', compact('pasajeros'));
        return $pdf->download('informe_pasajeros.pdf');
   }

    public function index()
    {
        $pasajeros = Pasajero::all();
        return view('pasajeros.index', compact('pasajeros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasajeros = Pasajero::all();

        return view('pasajeros.create', compact('pasajeros'));  
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre'        => 'required|min:5|max:100',
            'apellidos'     => 'required|min:2|max:100',
            'dni'           => [new Validaciondni],
            'f_nacimiento'  => 'required|date',
            'telefono'      =>  'required|min:9|max:12',
            'email'         => 'required|min:5|max:100',

        ]);

        Pasajero::create($request->all());
        return redirect()->route('pasajeros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasajero  $pasajero
     * @return \Illuminate\Http\Response
     */
    public function show(Pasajero $pasajero)
    {
        //
    }


    public function edit($id)
    {
        $pasajero = Pasajero::find($id);    /*::está buscando en el modelo*/
        return view('pasajeros.edit', compact('pasajero'));
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre'        => 'required|min:5|max:100',
            'apellidos'     => 'required|min:2|max:100',
            'f_nacimiento'  => 'required|date',
            'telefono'      =>  'required|min:9|max:12',
            'email'         => 'required|min:5|max:100',
        ]);

        $pasajeros = Pasajero::find($id);
        $pasajeros->update($request->all());

        return redirect()->route('pasajeros.index');  
    }

    public function destroy($id)
    {
        Pasajero::find($id)->delete();

        return redirect()->route('pasajeros.index');   
    }
}
