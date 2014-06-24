<?php


namespace HireIt\Commands\Auth;


use HireIt\Commanding\CommandCallback;
use HireIt\Commanding\CommandHandler;

class LoginUserCommandHandle extends CommandCallback implements CommandHandler {

    /**
     * @param LoginUserCommand $command
     */
    public function handle($command)
    {
        return $this->getCallback()->Success($command);
    }
}