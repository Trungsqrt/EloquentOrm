<?php

namespace App\Models;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'body'];

    public function photo()
    {
        return $this->morphMany(Photo::class, 'imageable');
    }
}
