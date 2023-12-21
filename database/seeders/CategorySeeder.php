<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory(6)->create();
        
        $sub = new SubCategory();
        $sub->title = fake()->name();
        $sub->slug = str()->slug(fake()->name());
        $sub->Category_id = 1;
        $sub->save();
    }
}
