<?php

namespace App\Http\Controllers;

use App\Models\Opinion;
use App\Models\Pasajero;
use App\Models\Conductor;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;
use App\Rules\Validaciondni;

class ConductorController extends Controller
{
    public function imprimir(){
        $conductores = Conductor::all();
        $pdf = \PDF::loadView('pdfs.conductores_pdf', compact('conductores'));
        return $pdf->download('informe_conductores.pdf');
   }

    public function index()
    {
        $conductores = Conductor::all();
        return view('conductores.index', compact('conductores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $conductores = Conductor::all();

        return view('conductores.create', compact('conductores'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        Conductor::create($request->all());
        return redirect()->route('conductores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function show(Conductor $conductor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conductor = Conductor::find($id);    /*::está buscando en el modelo*/
        return view('conductores.edit', compact('conductor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre'        => 'required|min:5|max:100',
            'apellidos'     => 'required|min:2|max:100',
            'f_nacimiento'  => 'required|date',
            'telefono'      =>  'required|min:9|max:12',
            'email'         => 'required|min:5|max:100',
        ]);

        $conductor = Conductor::find($id);
        $conductor->update($request->all());

        return redirect()->route('conductores.index');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Conductor::find($id)->delete();

        return redirect()->route('conductores.index');    
    }

    public function opinionesConductor($id, Pasajero $pasajero)    
    {
        $conductor  = Conductor::find($id);          
        return view('opiniones.conductores', compact('conductor'));   
    }

    public function trayectosConductor($id)    
    {
        $pasajeros = Pasajero::all();
        $conductor = Conductor::find($id);          

        return view('trayectos.conductores', compact('conductor', 'pasajeros'));   
    }

}
