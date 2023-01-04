<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProductoController extends Controller {

    public function index()
    {
        //return "Controller catalogo de productos";
        return view('productos.index');
    }
    public function show($nombre)
    {
        //return "Controller Detalles del producto $nombre";
        return view('productos.show', ['producto' => $nombre]);

    }
}