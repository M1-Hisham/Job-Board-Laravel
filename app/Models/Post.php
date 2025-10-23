<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = ['title', 'author', 'author2', 'body', 'poblished', 'user_id'];


    protected $guarded = ['id'];

    public function comments()
    {
        return $this->hasMany(comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
