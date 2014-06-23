<?php


namespace HireIt\Commands\Search;


use HireIt\Commanding\CommandCallback;
use HireIt\Commanding\CommandHandler;

class SearchForBookingsCommandHandler extends CommandCallback implements CommandHandler
{

    /**
     * @param SearchForBookingsCommand $command
     */
    public function handle( $command)
    {

        $this->callback->Success($command->searchTerm);
    }
} 