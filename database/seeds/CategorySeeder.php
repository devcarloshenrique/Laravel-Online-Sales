<?php

use Illuminate\Database\Seeder;

use App\Models\Category;
use App\Models\SubCategory;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::create([
            'name' => 'Imóveis',
        ]);


        $category->subCategories()->create([
            'name' => 'Apartamento',
            ]);


        //  Cadastrando por meio de models
        // SubCategory::create([
        //     'name' => 'Apartamento',
        //     'category_id' => '4',
        // ]);
    }
}
