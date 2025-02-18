<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chapter;

class ChapterSeeder extends Seeder
{
    public function run()
    {
        Chapter::create([
            'story_id' => 1, // ID của truyện One Piece
            'chapter_number' => 1,
            'title' => 'Hành trình bắt đầu'
        ]);
    }
}
