<?php

use App\Http\Controllers\ContratoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contratos', 'ContratoController@index')->name('contrato')->middleware('auth');
Route::get('/usuarios', 'UsuarioController@index')->name('usuario')->middleware('auth');
Route::get('/atestados', 'AtestadoController@index')->name('atestado')->middleware('auth');
Route::get('/unidades', 'UnidadeController@index')->name('unidade')->middleware('auth');

//Route::resource('/usuarios','UsuarioController');

Route::any('usuarios/search','UsuariossController@pesquisar');

Route::get('/contratos/create', 'ContratoController@create')->name('contratos.create');
Route::get('/usuarios/create', 'UsuarioController@create')->name('usuarios.create');
//Route::get('/atestados/create', 'AtestadoController@create')->name('atestado.create');
//Route::get('/unidades/create', 'UnidadeController@create')->name('unidade.create');

//Route::get('contratos/{id}','ContratoController@show')->name('contratos.show');
Route::get('usuarios/{id}','UsuarioController@show')->name('usuarios.show');
//Route::get('atestados/{id}','AtestadoController@show')->name('atestados.show');
//Route::get('unidades/{id}','UnidadeController@show')->name('unidades.show');

//Route::get('contratos/{id}','ContratoController@edit')->name('contratos.edit');
Route::get('usuarios/{id}','UsuarioController@edit')->name('usuarios.edit');
//Route::get('atestados/{id}','AtestadoController@edit')->name('atestados.edit');
//Route::get('unidades/{id}','UnidadeController@edit')->name('unidades.edit');

//Route::delete('contratos/{id}','ContratoController@destroy')->name('contratos.destroy');
Route::delete('usuarios/{id}','UsuarioController@destroy')->name('usuarios.destroy');
//Route::delete('atestados/{id}','AtestadoController@destroy')->name('atestados.destroy');
//Route::delete('unidades/{id}','UnidadeController@destroy')->name('unidades.destroy');

Route::post('contratos','ContratoController@store')->name('contratos.store');
Route::post('usuarios','UsuarioController@store')->name('usuarios.store');
Route::post('atestados','AtestadoController@store')->name('atestados.store');
Route::post('unidades','UnidadeController@store')->name('unidades.store');

//Route::put('contratos/{id}','ContratoController@update')->name('contratos.update');
Route::put('usuarios/{id}','UsuarioController@update')->name('usuarios.update');
//Route::put('atestados/{id}','AtestadoController@update')->name('atestados.update');
//Route::put('unidades/{id}','UnidadeController@update')->name('unidades.update');

