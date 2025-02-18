<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Story;

class StorySeeder extends Seeder
{
    public function run()
    {
        Story::create([
            'name' => 'One Piece',
            'status' => 'Ongoing',
            'author' => 'Eiichiro Oda',
            'genre' => 'Adventure, Action',
            'description' => 'Một cậu bé muốn trở thành vua hải tặc!'
        ]);
    }
}
