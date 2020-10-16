<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'title', 'subtitle', 'main_pic', 'min_pic', 'body', 'published_at', 'published_until', 'is_published', 'category', 'post_views'
    ];
    protected $casts = [
        'published_at' =>  'date:Y-m-d',
        'published_until' => 'datetime',
    ];
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
