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
                "name"=>"cremas"
            ],
            [
                "id"=>"2",
                "name"=>"Balsamos"
            ],
            [
                "id"=>"3",
                "name"=>"Pastillas"
            ],
            [
                "id"=>"4",
                "name"=>"Lociones"
            ],
            [
                "id"=>"5",
                "name"=>"Dulces"
            ],
            [
                "id"=>"6",
                "name"=>"Gotas"
            ],

        ];
        foreach($arayCategorias as $categoria){
            Categories::create($categoria);
        }
    }
}
