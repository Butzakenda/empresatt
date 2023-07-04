<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Departamentos;

class DepartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Consultar los departamentos y enviarlos a la vista
        //SELECT * FROM departamentos ORDER BY nombre

        $departamentos = Departamentos::orderBy('nombre','ASC')->get();
        return view('departamentos/index',['departamentos'=>$departamentos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('departamentos/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        Departamentos::create([
            'nombre'=>$request['nombredepartamento']
        ]);
        return redirect()->route('departamentos.index');
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

        $departamentos = Departamentos ::findOrFail($id);
        return view('departamentos/edit',['departamentos'=>$departamentos]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $departamentos = Departamentos :: findOrFail($id);
        $departamentos -> update([
            'nombre' => $request['nombredepartamento']
        ]);
        return redirect()->route('departamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $departamentos = Departamentos :: findOrFail($id);
        $departamentos -> delete();
        return redirect()->route('departamentos.index');
    }
}
