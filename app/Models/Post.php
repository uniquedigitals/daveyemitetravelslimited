<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    protected $fillable = [
        'name',
        'categories',
        'excerpt',
        'content',
        'image',
        'author',
    ];
    use HasFactory;
}
