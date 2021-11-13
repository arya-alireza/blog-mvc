<?php

namespace App\Models;

use Core\Model;
use Core\File;

class Post extends Model
{
    protected $fillable = [
        'author_id',
        'title',
        'img',
        'desc',
    ];

    public function relAuthor()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function getImageAttribute()
    {
        return File::get($this->img);
    }
}