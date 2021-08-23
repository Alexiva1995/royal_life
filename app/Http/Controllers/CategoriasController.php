<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Packages;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function show($categoria){


    $packages = Packages::where('categories_id', '=' , $categoria )->paginate(8);



       return view('categorias.show', compact('packages','categoria'));
  }
}
