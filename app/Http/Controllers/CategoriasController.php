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
         //  dd($categoria);
          $id = $categoria->id ;
          //dd($id) ;
          $packages = Packages::where('categories_id', '=' , $id)->get(); /*->paginate(8); */
            //dd( $categoria->id);
        }



       // return $categoria->id ;

        //return $packages;
      // $packages = Packages::orderBy('id', 'desc')->paginate(8);


       return view('categorias.show', compact('packages','data','categoria'));
  }
}
