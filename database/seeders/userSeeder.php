<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\user2;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user2::create([
            "first_name" => "saroja ",
            "last_name" => " gurung",
            "status" => true,
            "phone_number" => "980123456",
            "details" =>  "intern"
        ]);

        user2::create([
            "first_name" => "ek ",
            "last_name" => " bana",
            "status" => false,
            "phone_number" => "980123098",
            "details" =>  "internship program"
        ]);
        
        user2::factory()->times(10)->create();
 
        
    }
}
