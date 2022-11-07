<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $turkmen_objects = [
            'Turkmen',
        ];

        $russian_objects = [
            'Russian',
        ];

        $english_objects = [
            'English',
        ];



        foreach ($turkmen_objects as $turkmen_object) {
            Page::create([
                'body_tm' => $turkmen_object,
            ]);
        }
        foreach ($russian_objects as $russian_object) {
            Page::create([
                'body_ru' => $russian_object,
            ]);
        }
        foreach ($english_objects as $english_object) {
            Page::create([
                'body_tm' => $english_object,
            ]);
        }
    }
}
