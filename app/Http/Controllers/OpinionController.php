<?php

namespace App\Http\Controllers;

use App\Models\Opinion;
use App\Models\Pasajero;
use App\Models\Conductor;
use Illuminate\Http\Request;

class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasajeros = Pasajero::all();
        $conductores = Conductor::all();
        $opiniones = Opinion::all();

        return view('opiniones.create', compact('opiniones', 'conductores', 'pasajeros'));  
    }

    public function store(Request $request)
    {
        $validated = $request->validate([

            'fecha'     => 'required|date',
            'opinion'   => 'required|min:5|max:250',

        ]);

        Opinion::create($request->all());
        return redirect()->route('opiniones.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function show(Opinion $opinion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function edit(Opinion $opinion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opinion $opinion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Opinion  $opinion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Opinion $opinion)
    {
        //
    }
}
