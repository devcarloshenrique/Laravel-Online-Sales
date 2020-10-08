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

        factory(Category::class, 2)->create()->each(function($category){
            factory(SubCategory::class, 5)->create([
                'category_id' => $category->id
            ]);
        });

        // $category = Category::create([
        //     'name' => 'Imóveis',
        // ]);


        // $category->subCategories()->create([
        //     'name' => 'Apartamento',
        //     ]);


         //Cadastrando por meio de models

        // Category::create([
        //     'name' => 'Teste',
        // ]);

        //  SubCategory::create([
        //     'name' => 'Apartamento',
        //     'category_id' => '25',
        // ]);

    }
}
