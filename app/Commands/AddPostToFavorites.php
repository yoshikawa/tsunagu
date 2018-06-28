<?php

namespace App\Commands;

use Illuminate\Contracts\Queue\ShouldBeQueued;
use Illuminate\Database\Eloquent\Model;
use App\Commands\Command;
use App\Post;
use App\User;

class AddPostToFavorites extends Command implements ShouldBeQueued
{
    public $user;
    public $post;

    public function __construct(User $user, Post $post)
    {
        $this->user = $user;
        $this->post = $post;
    }
}
