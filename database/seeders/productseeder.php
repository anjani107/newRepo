<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use faker\Factory as Faker;


class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        for($i=1;$i<=100;$i++){
            $pro = new Product;
            $pro->name = $faker->name;
            $pro->Description = $faker->text;
            $pro->save();
        }

        
    }
}
