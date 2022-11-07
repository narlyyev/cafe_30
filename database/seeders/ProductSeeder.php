<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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
                'category_id' => 1,
                'name_tm' => 'Çizburger',
                'image' => '1.jpg',
                'price' => 45,
            ],
            [
                'category_id' => 1,
                'name_tm' => 'Ikili Çizburger',
                'image' => '2.jpg',
                'price' => 60,
            ],
            [
                'category_id' => 1,
                'name_tm' => 'Towuk burger',
                'image' => '3.jpg',
                'price' => 40,
            ],
            [
                'category_id' => 1,
                'name_tm' => 'Tamdyrlama Burger',
                'image' => '4.jpg',
                'price' => 60,
            ],
            [
                'category_id' => 1,
                'name_tm' => 'Towukly Sendwiç',
                'image' => '5.jpg',
                'price' => 35,
            ],
            [
                'category_id' => 1,
                'name_tm' => 'Göle etinden Sendwiç',
                'image' => '6.jpg',
                'price' => 35,
            ],
            [
                'category_id' => 1,
                'name_tm' => 'Üçli Sendwiç',
                'image' => '7.jpg',
                'price' => 45,
            ],
            [
                'category_id' => 1,
                'name_tm' => 'Tunesli Sendwiç',
                'image' => '8.jpg',
                'price' => 45,
            ],


            [
                'category_id' => 2,
                'name_tm' => 'Napoleon',
                'image' => '9.jpg',
                'price' => 25,
            ],
            [
                'category_id' => 2,
                'name_tm' => 'Esterhaizer',
                'image' => '10.jpg',
                'price' => 40,
            ],
            [
                'category_id' => 2,
                'name_tm' => 'Barhat',
                'image' => '11.jpg',
                'price' => 40,
            ],
            [
                'category_id' => 2,
                'name_tm' => 'Çizkeýk',
                'image' => '12.jpg',
                'price' => 40,
            ],
            [
                'category_id' => 2,
                'name_tm' => 'Trişokolat',
                'image' => '13.jpg',
                'price' => 50,
            ],
            [
                'category_id' => 2,
                'name_tm' => 'Şokolat Çüwdürimi',
                'image' => '14.jpg',
                'price' => 55,
            ],
            [
                'category_id' => 2,
                'name_tm' => 'Gowurlan Buzgaýmak',
                'image' => '15.jpg',
                'price' => 55,
            ],
            [
                'category_id' => 2,
                'name_tm' => 'Damski Kapriz',
                'image' => '16.jpg',
                'price' => 40,
            ],
            [
                'category_id' => 2,
                'name_tm' => 'Wanilny Doňdyrma',
                'image' => '17.jpg',
                'price' => 20,
            ],
            [
                'category_id' => 2,
                'name_tm' => 'Şokolatly Doňdyrma',
                'image' => '18.jpg',
                'price' => 20,
            ],
            [
                'category_id' => 2,
                'name_tm' => 'Malinaly Doňdyrma',
                'image' => '19.jpg',
                'price' => 20,
            ],
            [
                'category_id' => 2,
                'name_tm' => 'Garyşyk Doňdyrma',
                'image' => '20.jpg',
                'price' => 20,
            ],
            [
                'category_id' => 3,
                'name_tm' => 'Sygyr etli gyzgyn salat',
                'image' => '21.jpg',
                'price' => 45,
            ],
            [
                'category_id' => 3,
                'name_tm' => 'Towukly Gyzgyn Işdä Açary',
                'image' => '22.jpg',
                'price' => 45,
            ],
            [
                'category_id' => 3,
                'name_tm' => 'Towukly Sezar',
                'image' => '23.jpg',
                'price' => 45,
            ],
            [
                'category_id' => 3,
                'name_tm' => 'Etli Işdä Açar Soewy Sousda',
                'image' => '24.jpg',
                'price' => 45,
            ],
            [
                'category_id' => 3,
                'name_tm' => 'San-Marino',
                'image' => '25.jpg',
                'price' => 49,
            ],
            [
                'category_id' => 3,
                'name_tm' => 'Nisuaz Tunesli Işdä Açary',
                'image' => '26.jpg',
                'price' => 49,
            ],
            [
                'category_id' => 3,
                'name_tm' => 'Baklajanly we Göle etinden',
                'image' => '27.jpg',
                'price' => 45,
            ],
            [
                'category_id' => 3,
                'name_tm' => 'Gyzgyn Kombo',
                'image' => '28.jpg',
                'price' => 49,
            ],
            [
                'category_id' => 3,
                'name_tm' => 'Taýski Işdä Açary',
                'image' => '29.jpg',
                'price' => 49,
            ],
            [
                'category_id' => 3,
                'name_tm' => 'Kofe 30 Işdä Açary',
                'image' => '30.jpg',
                'price' => 45,
            ],
            [
                'category_id' => 3,
                'name_tm' => 'Grek Işdä Açary',
                'image' => '31.jpg',
                'price' => 35,
            ],
            [
                'category_id' => 4,
                'name_tm' => 'Türk Ertirligi',
                'image' => '32.jpg',
                'price' => 44,
            ],
            [
                'category_id' => 4,
                'name_tm' => 'Peýnirli Heýgenek',
                'image' => '33.jpg',
                'price' => 23,
            ],
            [
                'category_id' => 4,
                'name_tm' => 'Şöhlatly Heýgenek',
                'image' => '34.jpg',
                'price' => 23,
            ],
            [
                'category_id' => 4,
                'name_tm' => 'Kömelekli Heýgenek',
                'image' => '35.jpg',
                'price' => 23,
            ],
            [
                'category_id' => 4,
                'name_tm' => 'Şöhlatly Gözleme',
                'image' => '36.jpg',
                'price' => 23,
            ],
            [
                'category_id' => 4,
                'name_tm' => 'Peýnirli Gözleme',
                'image' => '37.jpg',
                'price' => 23,
            ],
            [
                'category_id' => 4,
                'name_tm' => 'Peýnirjikler',
                'image' => '38.jpg',
                'price' => 29,
            ],
            [
                'category_id' => 4,
                'name_tm' => 'Menemen',
                'image' => '39.jpg',
                'price' => 24,
            ],
        ];

        foreach ($objs as $obj) {
            Product::create([
                'category_id' => $obj['category_id'],
                'name_tm' => $obj['name_tm'],
                'image' => $obj['image'],
                'price' => $obj['price'],
            ]);
        }
    }
}
