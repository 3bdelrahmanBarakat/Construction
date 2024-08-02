<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sections')->insert([
            [
                'section_title_en' => 'Introduction to Laravel',
                'section_title_ar' => 'مقدمة إلى Laravel',
                'section_description_en' => 'This section covers the basics of Laravel.',
                'section_description_ar' => 'يتناول هذا القسم أساسيات Laravel.',
                'is_visable' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'section_title_en' => 'Advanced Laravel Techniques',
                'section_title_ar' => 'تقنيات Laravel المتقدمة',
                'section_description_en' => 'This section covers advanced Laravel techniques.',
                'section_description_ar' => 'يتناول هذا القسم تقنيات Laravel المتقدمة.',
                'is_visable' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
