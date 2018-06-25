<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = "messages";

    protected $fillable = ['from_id', 'to_id', 'message'];

    public function from()
    {
        return $this->belongsTo('App\User', 'from_id');
    }

    public function to()
    {
        return $this->belongsTo('App\User', 'to_id');
    }
}
