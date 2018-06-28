<?php

namespace App\Commands;

use Illuminate\Contracts\Queue\ShouldBeQueued;
use App\Commands\Command;
use App\User;

class CreateRePost extends Command implements ShouldBeQueued
{
    public $user;
    public $postId;

    public function __construct(User $user, $postId)
    {
        $this->user = $user;
        $this->postId = $postId;
    }
}
