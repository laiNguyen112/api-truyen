<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status', 'author', 'genre', 'description'];

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}
