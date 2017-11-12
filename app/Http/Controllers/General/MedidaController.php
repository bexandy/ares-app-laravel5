<?php

namespace Ares\Http\Controllers\General;

use Ares\Http\Controllers\Controller;
use Ares\Models\General\Medida;
use Illuminate\Http\Request;

class MedidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('medida.index', array('arrayMedidas' => Medida::all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medida.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Medida::create(request(['nombre', 'abreviatura', 'simbolo']));
        return redirect()->route('medida.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Ares\Models\General\Medida  $medida
     * @return \Illuminate\Http\Response
     */
    public function show(Medida $medida)
    {
        return view('medida.show', compact('medida'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Ares\Models\General\Medida  $medida
     * @return \Illuminate\Http\Response
     */
    public function edit(Medida $medida)
    {
        return view('medida.edit', compact('medida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Ares\Models\General\Medida $medida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medida $medida)
    {
        $medida->fill(request(['nombre', 'abreviatura', 'simbolo']));
        $medida->update();
        return redirect()->route('medida.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Ares\Models\General\Medida $medida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medida $medida)
    {
        $medida->delete();
        return redirect()->route('medida.index');
    }
}
