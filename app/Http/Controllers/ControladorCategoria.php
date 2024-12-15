<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class ControladorCategoria extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats = Categoria::all();
        return view('layout.categorias', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novacategoria');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cat = new Categoria();
        $cat->nome = $request->input('nome');
        $cat->save();
        return redirect('/categorias');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cat = Categoria::find($id);
        if(isset($cat)) {
            return view('editarcategoria', compact('cat'));
        }
        return redirect()->route('categorias.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cat = Categoria::find($id);
        if(isset($cat)) {
            $cat->nome = $request->input('nome');
            $cat->save();
        }
        return redirect()->route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cat = Categoria::find($id);
        $delete = $cat->delete();
        if ($delete) {
            return redirect()->route('categorias.index');
        }
    }
}
