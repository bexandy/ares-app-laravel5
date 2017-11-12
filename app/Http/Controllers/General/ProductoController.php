<?php

namespace Ares\Http\Controllers\General;

use Ares\Http\Controllers\Controller;
use Ares\Models\General\Producto;
use Ares\Models\General\Categoria;
use Ares\Models\General\Marca;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('producto.index', array('arrayProductos' => Producto::all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all('id', 'nombre');
        $marcas = Marca::all('id', 'nombre');
        return view('producto.create', compact('categorias', 'marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Producto::create(request(['categoria_id', 'marca_id', 'nombre', 'imagen', 'cod_premium']));
        return redirect()->route('producto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Ares\Models\General\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Ares\Models\General\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all('id', 'nombre');
        $marcas = Marca::all('id', 'nombre');
        return view('producto.edit', compact('producto', 'categorias', 'marcas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Ares\Models\General\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $producto->fill(request(['categoria_id', 'marca_id', 'nombre', 'imagen', 'cod_premium']));
        $producto->update();
        return redirect()->route('producto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Ares\Models\General\Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('producto.index');
    }
}
