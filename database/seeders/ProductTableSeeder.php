<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\factory as Faker;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 0; $i<=20;$i++) {
            Product::create([
                'name'=>$faker->name,
                'description'=>$faker->paragraph,
                'price'=>$faker->randomFloat(),
                'image'=>$faker->imageUrl,
                'company_id'=>$faker->numberBetween($min=1, $max=20)
            ]);
        }
    }
}
