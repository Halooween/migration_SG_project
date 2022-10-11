<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\user2;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(userSeeder::class);

        // user2::factory()
        //    ->has(Product::factory()
        //    ->count(10))
        //    ->create();
        
      $this->call(productSeeder::class);
      $this->call(PostSeeder::class);

    }
}
