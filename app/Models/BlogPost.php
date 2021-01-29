<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id'
    ];
    protected $table = "blog_posts";
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blogpost_tag', 'blogpost_id', 'tag_id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id' );
    }

}
