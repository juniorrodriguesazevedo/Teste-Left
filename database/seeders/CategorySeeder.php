<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Database\Seeder;

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
