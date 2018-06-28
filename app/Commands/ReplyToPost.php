<?php

namespace App\Commands;

use App\Commands\Command;
use App\User;

class ReplyToPost extends Command
{
    public $user;
    public $replyTo;
    public $postString;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(User $user, $replyTo, $postString)
    {
        $this->user = $user;
        $this->replyTo = $replyTo;
        $this->postString = $postString;
    }
}
