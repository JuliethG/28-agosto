<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\factory as Faker;
use App\Models\Company;

class CompanyTableSeeder extends Seeder
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
            Company::create([
                'name'=>$faker->company,
                'nit'=>$faker->randomNumber()
            ]);
        }
    }
}
