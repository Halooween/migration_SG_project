<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\user2;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('product')->insert([
        //     "name"  => "saroja gurung",
        //     "category" => "intern",
        //     "status"  =>  "female",
        // ]);

        // DB::table('product')->insert([
        //     "name"  => "mamata shrestha",
        //     "category" => "HR",
        //     "status"  =>  "female",
        // ]);

        //Product::factory()->times(10)->create();
       user2::factory()
        ->has(Product::factory()
        ->count(10))
        ->create();

    }
}
