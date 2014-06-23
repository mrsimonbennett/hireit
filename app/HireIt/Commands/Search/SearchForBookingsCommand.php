<?php


namespace HireIt\Commands\Search;


class SearchForBookingsCommand{
    /**
     * @var
     */
    public $searchTerm;

    public function __construct($searchTerm)
    {

        $this->searchTerm = $searchTerm;
    }
} 