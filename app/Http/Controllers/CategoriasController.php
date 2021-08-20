<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Packages;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function show(Request  $request , Categories $categories){

        $categorias = Categories::all();
        foreach ($categorias as $categoria){
            $data = ['categories_id'=> $categoria->id];
           dd($categoria);
            $packages = Packages::where('categories_id','=',  $categoria->id)->paginate(8);
        }

       // return $categoria->id ;

        //return $packages;
      // $packages = Packages::orderBy('id', 'desc')->paginate(8);


       return view('categorias.show', compact('packages','data','categoria'));
  }
}
