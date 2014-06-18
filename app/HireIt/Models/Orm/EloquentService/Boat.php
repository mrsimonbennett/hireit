<?php


namespace HireIt\Models\Orm\EloquentService;


use HireIt\Models\Orm\EloquentImplementation\Boat as EloqentBoat;
use HireIt\Models\Repository\BoatInterface;
use Mrsimonbennett\LaravelRepositories\MasterService;

class Boat extends MasterService implements BoatInterface
{
    public function __construct(EloqentBoat $boat)
    {
        $this->model = $boat;
    }
}