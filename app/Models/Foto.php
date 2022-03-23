<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Foto extends Model
{
    use SoftDeletes;

    protected $fillable = ["posts_id", "image"];

    protected $hidden = [];

    public function post()
    {
        return $this->belongsTo(Post::class, "posts_id", "id");
    }
}
