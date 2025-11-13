<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendedores = Vendedor::all();
        return view('vendedores.index', compact('vendedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
        ]);
        Vendedor::create($data);
        return redirect()->route('vendedores.index') ->with('ok', 'Vendedor creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendedor = \App\Models\Vendedor::findOrFail($id);
        return view('vendedores.edit', compact('vendedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $vendedor = Vendedor::findOrFail($id);

        $dataUpdate = $request->validate([
            'nombre' => ['required','string','max:255'],
            'cargo' => ['required','string','max:255'],
            'telefono' => ['required','string','max:255'],
        ]);

        $vendedor->update($dataUpdate);

        return redirect()->route('vendedores.index')->with('ok', 'Vendedor actualizado.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendedorDelete = Vendedor::findOrFail($id);
        $vendedorDelete->delete();
        return redirect()->route('vendedores.index')->with('ok', 'Vendedor eliminado.');
    }
}