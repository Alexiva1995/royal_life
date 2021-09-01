<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arayCategorias = [
            [
                "id"=>"1",
                "categories_name"=>"cremas"
            ],
            [
                "id"=>"2",
                "categories_name"=>"Balsamos"
            ],
            [
                "id"=>"3",
                "categories_name"=>"Pastillas"
            ],
            [
                "id"=>"4",
                "categories_name"=>"Lociones"
            ],
            [
                "id"=>"5",
                "categories_name"=>"Dulces"
            ],
            [
                "id"=>"6",
                "categories_name"=>"Gotas"
            ],

        ];
        foreach($arayCategorias as $categoria){
            Categories::create($categoria);
        }
    }
}
