<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //
    public function index(){
        return Categoria::get();
    }
    public function show (Categoria $categoria){
        return $categoria;
    }
}
