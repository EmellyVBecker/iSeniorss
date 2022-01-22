<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/emergencia', function () {
    return view('emergencia');
});
Route::get('/classe/exercicios', function () {
    return view('exercicios');
});
Route::get('/comprinhas', function () {
    return view('comprinhas');
});
Route::get('/oeste', function () {
    return view('oeste');
});
Route::get('/nometeste', function () {
    return view('nometeste');
});
Route::get('/teste2', function () {
    return view('teste2');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function (){

Route::get('/medicamentos', 'MedicamentosController@index');
Route::get('/medicamentos/create', "MedicamentosController@create"); // carregar o formulário
Route::post('/medicamentos/store', 'MedicamentosController@store'); // salvar os dados do formulário
Route::get('/medicamentos/edit{id}', 'MedicamentosController@edit');
Route::get('/medicamentos/remove{id}', 'MedicamentosController@remove');
Route::post('/medicamentos/update/', 'MedicamentosController@update');
Route::post('/medicamentos/search/', 'MedicamentosController@search');

Route::get('/consultas', 'ConsultasController@index');
Route::get('/consultas/create', "ConsultasController@create"); // carregar o formulário
Route::post('/consultas/store', 'ConsultasController@store'); // salvar os dados do formulário
Route::get('/consultas/edit{id}', 'ConsultasController@edit');
Route::get('/consultas/remove{id}', 'ConsultasController@remove');
Route::post('/consultas/update/', 'ConsultasController@update');
Route::post('/consultas/search/', 'ConsultasController@search');

});