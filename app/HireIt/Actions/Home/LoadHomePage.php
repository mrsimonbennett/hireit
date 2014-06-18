<?php


namespace HireIt\Actions\Home;

use HireIt\Actions\Action;
use HireIt\Models\Repository\BoatInterface;

class LoadHomePage extends Action
{
    /**
     * @var \HireIt\Models\Repository\BoatInterface
     */
    private $boatInterface;

    /**
     * @param BoatInterface $boatInterface
     */
    public function __construct(BoatInterface $boatInterface)
    {
        $this->boatInterface = $boatInterface;
    }

    public function fire()
    {
        return $this->callback->Success($this->boatInterface->all());
    }
} 