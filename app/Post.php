<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Services\PostParser;

class Post extends Model
{
    protected $table = "posts";

    protected $fillable = ['user_id', 'post', 'parent_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function favorites()
    {
        return $this->hasMany('App\Favorite');
    }

    public function parent()
    {
        return $this->belongsTo('App\Post');
    }

    public function replies()
    {
        return $this->hasMany('App\Post', 'parent_id', 'id');
    }
    public function reposts()
    {
        return $this->hasMany('App\RePost');
    }

    public function hashtags()
    {
        return $this->belongsToMany('App\Hashtag', 'hashtag_map', 'post_id', 'hashtag_id');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }
}
