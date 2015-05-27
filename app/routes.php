<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});



	Route::get('ingreso', ['as'=>'ingreso', 'uses'=>'AutenticacionController@getIngreso']);
	Route::post('ingreso', ['as'=>'ingreso', 'uses'=>'AutenticacionController@postIngreso']);


	/*Rutas para el proceso de registro en la app*/
	Route::get('registro', ['as'=>'registro', 'uses'=>'UsuarioController@getRegistro']);
	Route::post('registro', ['as'=>'registro', 'uses'=>'UsuarioController@postRegistro']);

	Route::get('dentro', ['as'=>'dentro', 'uses'=>'UsuarioController@getDentro']);
	/*Ruta para activacion de la cuenta después de registro, registro mediante correo*/
	Route::get('activar/{random}', 'CuentaController@activarPostRegistro');


