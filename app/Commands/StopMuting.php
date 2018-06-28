<?php
namespace App\Commands;

use App\Commands\Command;
use App\User;

class StopMuting extends Command
{
    public $user;
    public $muteId;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(User $user, $muteId)
    {
        $this->user = $user;
        $this->muteId = $muteId;
    }
}
