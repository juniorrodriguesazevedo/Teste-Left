<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Services\CategoryService;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = CategoryService::listCategories();

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
