<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Wedding', 'Potrait', 'Model Photography', 'Events'];

        foreach ($categories as $key => $category) {
            Category::create([
                'name' => $categories[$key],
            ]);
        }
    }
}
