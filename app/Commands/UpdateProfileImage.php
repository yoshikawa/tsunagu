<?php

namespace App\Commands;

use App\Commands\Command;
use App\User;

class UpdateProfileImage extends Command
{
    public $user;
    public $image;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(User $user, $image)
    {
        $this->user = $user;
        $this->image = $image;
    }
}
