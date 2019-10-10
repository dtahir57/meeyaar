<?php

use App\Models\Category;
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
        Category::create(['title' => 'Electronic Devices', 'user_id' => 1]);
        Category::create(['title' => 'Electronic Accessories', 'user_id' => 1]);
        Category::create(['title' => 'TV & Home Appliances', 'user_id' => 1]);
        Category::create(['title' => 'Health & Beauty', 'user_id' => 1]);
        Category::create(['title' => 'Babies & Toys', 'user_id' => 1]);
        Category::create(['title' => 'Groceries & Pets', 'user_id' => 1]);
        Category::create(['title' => 'Home & Lifestyles', 'user_id' => 1]);
        Category::create(['title' => 'Women\'s Fashion', 'user_id' => 1]);
        Category::create(['title' => 'Men\'s Fashion', 'user_id' => 1]);
        Category::create(['title' => 'Fashion Accessories', 'user_id' => 1]);
        Category::create(['title' => 'Sports & Outdoors', 'user_id' => 1]);
        Category::create(['title' => 'Automative & Motorbike', 'user_id' => 1]);
    }
}
