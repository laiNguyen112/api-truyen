<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChapterImage;

class ChapterImageSeeder extends Seeder
{
    public function run()
    {
        ChapterImage::create([
            'chapter_id' => 1, // ID của chapter "Hành trình bắt đầu"
            'image_url' => 'https://example.com/image1.jpg'
        ]);
    }
}
