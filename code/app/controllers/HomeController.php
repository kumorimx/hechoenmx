<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    public function feIndex()
    {
        return View::make('frontend/index');
    }

	public function index()
	{
		return View::make('index');
	}

    public function registro()
    {
        return View::make('registro');
    }

    public function directorio()
    {
        return View::make('directorio');
    }

    public function perfil()
    {
        return View::make('perfil');
    }

    public function eventos()
    {
        return View::make('eventos');
    }

    public function recomendacion()
    {
        return View::make('recomendacion');
    }

    public function Mensajes()
    {
        return View::make('mensajes');
    }

    public function Convocatorias()
    {
        return View::make('convocatorias');
    }

    public function crearEvento()
    {
        return View::make('crearEvento');
    }

    public function crearConvocatoria()
    {
        return View::make('crearConvocatoria');
    }

    public function crearProducto()
    {
        return View::make('crearProducto');
    }

    public function vitrinaProductos()
    {
        return View::make('productos');
    }

    public function perfilPublico()
    {
        return View::make('perfilPublico');
    }

}
