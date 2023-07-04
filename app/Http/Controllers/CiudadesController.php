<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use App\Models\Ciudades;
use App\Models\Departamentos;

class CiudadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $ciudades = DB::table('departamentos')
                    ->join('ciudades','ciudades.iddepartamento','=','departamentos.iddepartamento')
                    ->select('ciudades.idciudad','departamentos.iddepartamento','departamentos.nombre as dep','ciudades.nombre')
                    ->orderby('departamentos.nombre','ASC') 
                    ->orderby('ciudades.nombre','ASC')    
                    ->get();

        return view('ciudades/index',['ciudades'=>$ciudades]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $departamentos = Departamentos::orderBy('nombre','ASC')->get();
        return view('ciudades/create',['departamentos'=>$departamentos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Ciudades::create([
            'nombre'=>$request['nombreciudad'],
            'iddepartamento'=>$request['iddpto']
        ]);
        return redirect()->route('ciudades.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $ciudades = Ciudades ::findOrFail($id);
        $departamentos = Departamentos :: orderBy('nombre','ASC')->get();
        return view('ciudades/edit')->with('ciudades',$ciudades)->with('departamentos',$departamentos); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $ciudades = Ciudades :: findOrFail($id);
        $ciudades -> update([
            'nombre' => $request['nombreciudad']
        ]);
        return redirect()->route('ciudades.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $ciudades = Ciudades :: findOrFail($id);
        $ciudades -> delete();
        return redirect()->route('ciudades.index');
    }
}
