<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'posts';
    
    protected $fillable = ['title', 'author', 'author2', 'body', 'poblished'];


    protected $guarded = ['id'];

    public function comments()
    {
        return $this->hasMany(comment::class);
    }
}
