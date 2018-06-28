<?php

namespace App\Commands;

use App\Commands\Command;
use App\User;

class StopFollowing extends Command
{
    public $user;
    public $followId;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(User $user, $followId)
    {
        $this->user = $user;
        $this->followId = $followId;
    }
}
