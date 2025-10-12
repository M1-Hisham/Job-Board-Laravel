<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */

    use HasFactory;
    protected $table = 'comment';

    protected $fillable = ['content', 'author', 'post_id'];

    protected $guarded = ['id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
