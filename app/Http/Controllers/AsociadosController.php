<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asociado;

class AsociadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asociados = Asociado::all();

        return view('backend.asociados.index', compact('asociados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.asociados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario


        // Crear un nuevo asociado en la base de datos
        Asociado::create($request->all());

        // Redirigir a alguna vista o a la misma vista del formulario
        return redirect()->route('backend.asociado.index')->with('success', 'Asociado creado correctamente.');
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
