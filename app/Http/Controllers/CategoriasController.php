<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Packages;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function show(Categories $categories){
       $productos = Packages::where('categories_id', $categories->id)->paginate(8);


       return view('categorias.show', compact('productos','categories'));
  }
}
