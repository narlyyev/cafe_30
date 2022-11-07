<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objs = [
            [
                'name_tm' => 'Burgerler we Sandwiçler',
                'image' => '1.jpg',
            ],

            [
                'name_tm' => 'Süýjilik',
                'image' => '2.jpg',
            ],

            [
                'name_tm' => 'Işdä Açarlar',
                'image' => '3.jpg',
            ],

            [
                'name_tm' => 'Ertirlik',
                'image' => '4.jpg',
            ],

            [
                'name_tm' => 'Içgiler',
                'image' => '5.jpg',
            ],

            [
                'name_tm' => 'Kofe we çaý',
                'image' => '6.jpg',
            ],

            [
                'name_tm' => 'Suşi we Roll',
                'image' => '7.jpg',
            ],

            [
                'name_tm' => 'Çorbalar',
                'image' => '8.jpg',
            ],

            [
                'name_tm' => 'Gyzgyn Naharlar',
                'image' => '9.jpg',
            ],

            [
                'name_tm' => 'Pizza',
                'image' => '10.jpg',
            ],

            [
                'name_tm' => 'Garnirler',
                'image' => '11.jpg',
            ],
                ];


        foreach ($objs as $obj) {
            Category::create([
                'name_tm' => $obj['name_tm'],
                'image' => $obj['image'],
                'slug' => str($obj['name_tm'])->slug(),
            ]);
        }
    }
}
