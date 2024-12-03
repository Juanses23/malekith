<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('carrito.interfaz');
    }

    public function indexadmin(){
        return view('agregar.agregar');
    }
    public function logout(){
        return view('php.logout');
    }
    public function inicio(){
        return view('php.pagina-inicio');
    }
    public function carrito(){
        return view('carrito.carrito');
    }
    public function carrito1(){
        return view('carrito.carrito');
    }
    public function pagar(){
        return view('carrito.pagar');
    }
    public function iniciarsesion(){
        return view('php.index');
    }
    public function iniciarsesion1(){
        return view('php.index');
    }
}
