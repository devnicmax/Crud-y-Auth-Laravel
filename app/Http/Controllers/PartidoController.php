<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use Illuminate\Http\Request;
use Validator;

class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layout.dashboard',['partidos' => Partido::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layout.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'name'        => 'required|string|max:100',
            'latitude'    => 'required|string|max:255',
            'longitude'   => 'required|string|max:255',
        ]);

        if($validated->fails()) return redirect()->route("register")->withErrors($validated->errors())->withInput();

        $partido = Partido::create([
            'name' => $request->name,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude
        ]);

        return redirect()->route("dashboard")->withSuccess("Se ha creado el partido con éxito.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function show(Partido $partido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function edit(Partido $partido)
    {
        $partidos = Partido::find($partido);
        return view('layout.edit',compact('partidos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partido $partido)
    {
        $validated = Validator::make($request->all(),[
            'name'        => 'required|string|max:100',
            'latitude'    => 'required|string|max:255',
            'longitude'   => 'required|string|max:255',
        ]);

        if($validated->fails()) return redirect()->route("edit")->withErrors($validated->errors())->withInput();
        
        Partido::where('id', $partido->id)->update([
            'name'      => $request->name,
            'latitude'  => $request->latitude,
            'longitude' => $request->longitude
        ]);

        return redirect()->route("dashboard")->withSuccess("Se ha actualizado el partido con éxito.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partido $partido)
    {
        $partido->delete();
        return redirect()->route("dashboard")->withSuccess("Se ha eliminado el partido con éxito.");
    }
}
