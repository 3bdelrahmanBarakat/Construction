<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('section_details')->insert([
            [
                'content_title_en' => 'Basic Concepts',
                'content_title_ar' => 'المفاهيم الأساسية',
                'content_description_en' => 'Learn about the fundamental concepts of Laravel.',
                'content_description_ar' => 'تعلم عن المفاهيم الأساسية في Laravel.',
                'section_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content_title_en' => 'Service Providers',
                'content_title_ar' => 'مقدمو الخدمة',
                'content_description_en' => 'Deep dive into Laravel service providers.',
                'content_description_ar' => 'التعمق في مقدمي الخدمة في Laravel.',
                'section_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
