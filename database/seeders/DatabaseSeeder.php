<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\RatingProduct;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        ProductCategory::create([
            'slug' => str_replace(' ','-',"men's clothing"),
            'name' => "men's clothing"
        ]);
        ProductCategory::create([
            'slug' => str_replace(' ','-',"women's clothing"),
            'name' => "women's clothing"
        ]);
         ProductCategory::create([
            'slug' => str_replace(' ','-',"jewelery"),
            'name' => "jewelery"
        ]); 
        ProductCategory::create([
            'slug' => str_replace(' ','-',"electronics"),
            'name' => "electronics"
        ]);
        ProductCategory::create([
            'slug' => str_replace(' ','-',"automotive"),
            'name' => "automotive"
        ]);
        ProductCategory::create([
            'slug' => str_replace(' ','-',"baby"),
            'name' => "baby"
        ]);

        Product::factory(100)->create();
        RatingProduct::factory(100)->create();
    }
}
