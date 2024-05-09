<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Conference;
use Faker\Factory as Faker;


class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        (new Conference())->insert([
            [
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'date' => now(),
                'addres' => '123 Main Street, City, Country'
            ],
            [
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'date' => now(),
                'addres' => '123 Main Street, City, Country'
            ],
            [
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'date' => now(),
                'addres' => '123 Main Street, City, Country'
            ],
            [
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'date' => now(),
                'addres' => '123 Main Street, City, Country'
            ]
        ]);
    }
}
