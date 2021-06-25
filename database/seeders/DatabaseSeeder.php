<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $category = \App\Models\Category::create([
            'name'=>'Laptop',
            'description'=>'This is the category for all kind of laptops.'
        ]);

       \App\Models\Customer::factory(10)->create();
       \App\Models\Product::factory(10)->create(
           ['cat_id'=>'2']
       );

    }
}