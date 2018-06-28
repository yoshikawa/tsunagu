<?php

namespace App\Commands;

use Illuminate\Contracts\Queue\ShouldBeQueued;
use App\Commands\Command;
use App\User;

class CreatePost extends Command implements ShouldBeQueued
{
    public $postString;

    public function __construct(User $user, $postString)
    {
        $this->user = $user;
        $this->postString = $postString;
    }
}
