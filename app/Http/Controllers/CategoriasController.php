<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Facade\Ignition\Support\Packagist\Package;

class CategoriasController extends Controller
{
    public function show($categoria){

   /* $packages = Packages::where('categories_id', '=' , $categoria )->paginate(8);

   dd(  $cate = DB::table('packages')
                      ->leftjoin('categories', 'packages.categories_id', '=' , 'categories.id')
                      ->get() ); */


  $packages = Packages::leftjoin('categories', 'packages.categories_id', '=' , 'categories.id')
                         ->where('categories_id', '=' , $categoria )
                         ->paginate(8) ;

    return view('categorias.show', compact('packages','categoria'));
  }
}
