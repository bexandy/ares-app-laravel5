<?php

namespace Ares\Http\Controllers\General;

use Ares\Http\Controllers\Controller;
use Ares\Models\General\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('marca.index', array('arrayMarcas' => Marca::all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marca.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Marca::create(request(['nombre', 'imagen']));
        return redirect()->route('marca.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Ares\Models\General\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(Marca $marca)
    {
        return view('marca.show', compact('marca'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Ares\Models\General\Marca $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(Marca $marca)
    {
        return view('marca.edit', compact('marca'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Ares\Models\General\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marca $marca)
    {
        $marca->fill(request(['nombre', 'imagen']));
        $marca->update();
        return redirect()->route('marca.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Ares\Models\General\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marca $marca)
    {
        $marca->delete();
        return redirect()->route('marca.index');
    }
}
