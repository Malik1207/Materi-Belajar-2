<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0; $i < 10 ; $i++) {
            Customer::create([
                'name' => $faker->name,
                'address' => $faker->address,
                'phone_number' => $faker->phoneNumber
            ]);
        }

    }
}
