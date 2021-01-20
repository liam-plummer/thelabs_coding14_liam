<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    public function tags(){
        return $this->belongsToMany(Tag::class, 'blogpost_tag', 'blogpost_id', 'tag_id');
    }
}
