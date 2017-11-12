<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('clientes',function () {
    $marcas = DB::table('marcas')->latest()->get();
    return view('about', compact('marcas'));
})->name('clientes');

Route::get('ventas',function () {
    return view('about')->with('seccion','Ventas');
})->middleware('auth')->name('ventas');

Route::get('despacho',function () {
    return view('about')->with('seccion','Despacho');
})->name('despacho');

Route::get('admin', function () {
    return view('admin.dashboard');
})->name('admin');

Route::resource('categoria', 'General\CategoriaController',['parameters' => ['categoria' => 'categoria']]);

Route::resource('marca', 'General\MarcaController');

Route::resource('medida', 'General\MedidaController');

Route::resource('producto', 'General\ProductoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
Menu::make('MyNavBar', function($menu){
  $menu->add('Clientes',  'clientes');
  $menu->add('Ventas', 'ventas');
  $menu->add('Despacho', 'despacho');
  $menu->add('Administracion','admin');



});
*/
