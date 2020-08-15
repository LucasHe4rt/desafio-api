<?php

use Illuminate\Database\Seeder;
use \App\Entities\Category;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Bom'],
            ['name' => 'Ruim'],
            ['name' => 'He4rt Indica'],
        ];
        foreach($categories as $category){
            Category::create($category);
        }
    }
}
