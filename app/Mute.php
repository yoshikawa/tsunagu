<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mute extends Model
{
    protected $table = 'muted';

    protected $fillable = ['user_id', 'muted_id'];
}
