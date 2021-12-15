<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

/*Route::get('/empleado', function () {
    return view('empleado.index');
});
Route::get('/empleado/create',[EmpleadoController::class,'create']);*/

Route::resource('empleado', EmpleadoController::class)->middleware('auth'); //El middleware realiza una seguridad que si tienes en memoria la ruta de crear o editar y no estas logeado no te deja entrar
Auth::routes(['register'=>false,'reset'=>false]); //Los que tienen false desaparecen

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::get('/inicio', [EmpleadoController::class, 'inicios'])->name('inicio');



Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [EmpleadoController::class, 'index'])->name('home');
});
