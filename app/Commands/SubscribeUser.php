<?php
namespace App\Commands;

use Illuminate\Contracts\Queue\ShouldBeQueued;
use App\Commands\Command;
use App\User;

class SubscribeUser extends Command implements ShouldBeQueued
{
    public $user;
    public $followId;

    public function __construct(User $user, $followId)
    {
        $this->user = $user;
        $this->followId = $followId;
    }
}
