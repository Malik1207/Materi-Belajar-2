<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'news_content', 'author',
    ];

    public function writer() {
        return $this->belongsTo(User::class, 'author', 'id');
    }
}
