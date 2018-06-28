<?php

namespace App\Commands;

use App\Commands\Command;

class UnFavoritePost extends Command
{
    public $userId;
    public $postId;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($userId, $postId)
    {
        $this->userId = $userId;
        $this->postId = $postId;
    }
}
