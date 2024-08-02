<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('section_images')->insert([
            [
                'image' => 'images/laravel_intro.jpg',
                'section_id' => 1,
                'section_detail_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'images/service_providers.jpg',
                'section_id' => 2,
                'section_detail_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
