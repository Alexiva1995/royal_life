<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Packages;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function show(Categories $categories){

        $categorias = Categories::all();
        foreach ($categorias as $categoria){

        }

       // return $categoria->id ;
        $packages = Packages::where('categories_id','=',  1)->paginate(8);
        //return $packages;
      // $packages = Packages::orderBy('id', 'desc')->paginate(8);

       return view('categorias.show', compact('packages','categoria'));
  }
}
