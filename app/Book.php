<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'year', 'description', 'slug'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
