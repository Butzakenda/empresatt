<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('nosotros', function () {
    return view('nosotros');
});
Route::get('ofertas', function () {
    return view('ofertas');
});
Route::get('darksouls',function () {
    return view('darksouls');
});

Route::get('diosesgriegos',function () {
    return view('diosesgriegos');
});

Route::get('sesion',function () {
    return view('sesion');
});

Route::get('index',function () {
    return view('index');
});

//Route::get('programas','App\Http\Controllers\ProgramasController@index')->name('programas.index');
Route::get('programas','ProgramasController@index')->name('programas.index');

//darksouls
Route::get('darksouls','DarksoulsController@index')->name('darksouls.index');

//diosesgriegos
Route::get('diosesgriegos','DiosesgriegosController@index')->name('diosesgriegos.index');

//Departamentos
Route::get('departamentos/index','DepartamentosController@index')->name('departamentos.index');

    //Ruta para llamar Create en Departamentos
    Route::get('departamentos/crear','DepartamentosController@create')->name('departamentos.create');

    //Ruta para llamar a Store en Crear Departamento
    Route::post('departamentos/agregar','DepartamentosController@store')->name('departamentos.store');

    //Ruta para llamar a Edit en Departamento
    Route::get('departamentos/editar/{id}','DepartamentosController@edit')->name('departamentos.edit');

    //Ruta para llamar a Update en Departamento
    Route::get('departamentos/actualizar/{id}','DepartamentosController@update')->name('departamentos.update');

    //Ruta para llamar a Destroy en Departamento
    Route::get('departamentos/eliminar/{id}','DepartamentosController@destroy')->name('departamentos.destroy');

//---------------------------------

//Ciudades
Route::get('ciudades/index','CiudadesController@index')->name('ciudades.index');

    //Ruta para llamar a Create en Ciudades
    Route::get('ciudades/crear','CiudadesController@create')->name('ciudades.create');

    //Ruta para llamar a Store en Ciudades
    Route::post('ciudades/agregar','CiudadesController@store')->name('ciudades.store');

    //Ruta para llamar a Destroy en Ciudades
    Route::get('ciudades/eliminar/{id}','CiudadesController@destroy')->name('ciudades.destroy');

    //Ruta para llamar a Edit en Ciudades
    Route::get('ciudades/editar/{id}','CiudadesController@edit')->name('ciudades.edit');

    //Ruta para llamar a Update en Ciudades
    Route::get('ciudades/actualizar/{id}','CiudadesController@update')->name('ciudades.update');

//---------------------------------    

//Contraseña
//Route::get('password/index','TestController@index')->name('test.index');

Route::get('test',function () {
    return view('test');
}); 

