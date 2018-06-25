<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'user_profiles';

    protected $fillable = ['user_id', 'display_name', 'tagline', 'location', 'website', 'image_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function image()
    {
        return $this->belongsTo('App\Image');
    }
}
