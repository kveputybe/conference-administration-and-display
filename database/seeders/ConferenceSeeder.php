<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Conference;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        (new Conference())->insert([
            [
                'title' => 'dasdas',
                'description' => 'ahfsdkjasdhfkjabsdfjasbdh',
                'date' => now(),
                'addres' => '123 Main Street, City, Country'
            ],
            [
                'title' => '2pavadfionas',
                'description' => 'Lorem::text()',
                'date' => now(),
                'addres' => '123 Main Street, City, Country'
            ],
            [
                'title' => '3pav',
                'description' => 'valio',
                'date' => now(),
                'addres' => '123 Main Street, City, Country'
            ],
            [
                'title' => '4pav',
                'description' => 'alio',
                'date' => now(),
                'addres' => '123 Main Street, City, Country'
            ]
        ]);
    }
}
