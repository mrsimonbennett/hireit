<?php
namespace HireIt\Controllers;

use HireIt\Commanding\CommandBus;
use Illuminate\Http\Request;
use Mrsimonbennett\Dipr\Controller;

class BaseController extends Controller
{
    /**
     * @var \HireIt\Commanding\CommandBus
     */
    protected $commandBus;

    /**
     * @param CommandBus $commandBus
     */
    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

} 