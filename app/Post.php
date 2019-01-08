<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['name', 'description', 'slug'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
