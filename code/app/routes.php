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

Route::get('/afiliado/', 			        ['as'=>'Index',             'uses' => 'HomeController@index']);
Route::get('/afiliado/perfil', 			    ['as'=>'Perfil',            'uses' => 'HomeController@perfil']);
Route::get('/afiliado/directorio', 			['as'=>'Directorio',        'uses' => 'HomeController@directorio']);
Route::get('/afiliado/mensajes', 			['as'=>'Mensajes',          'uses' => 'HomeController@mensajes']);
Route::get('/afiliado/convocatorias',    	['as'=>'Convocatoria',      'uses' => 'HomeController@convocatorias']);
Route::get('/afiliado/eventos',    	        ['as'=>'Evento',            'uses' => 'HomeController@eventos']);

Route::get('/registro', 			    ['as'=>'Registro',             'uses' => 'HomeController@registro']);
Route::get('/conectate', 			    ['as'=>'Conectate',            'uses' => 'HomeController@conectate']);
Route::get('/recomendacion', 			['as'=>'Recomendacion',        'uses' => 'HomeController@recomendacion']);

Route::get('/', 			['as'=>'feIndex',        'uses' => 'HomeController@feIndex']);

Route::get('/afiliado/crear-evento',    	    ['as'=>'crearEvento',       'uses' => 'HomeController@crearEvento']);
Route::get('/afiliado/crear-convocatoria',   ['as'=>'crearConvocatoria', 'uses' => 'HomeController@crearConvocatoria']);
Route::get('/afiliado/crear-producto',       ['as'=>'crearProducto',     'uses' => 'HomeController@crearProducto']);
Route::get('/afiliado/vitrina-productos',    ['as'=>'vitrinaProductos',  'uses' => 'HomeController@vitrinaProductos']);

Route::get('/perfil-publico/kumori',['as'=>'perfilPublico',     'uses' => 'HomeController@perfilPublico']);
