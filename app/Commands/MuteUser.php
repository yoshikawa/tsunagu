<?php

namespace App\Commands;

use App\Commands\Command;

class MuteUser extends Command
{
    public $userId;
    public $muteId;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($userId, $muteId)
    {
        $this->userId = $userId;
        $this->muteId = $muteId;
    }
}
