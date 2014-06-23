<?php


namespace HireIt\Commanding;

use Illuminate\Foundation\Application;
use Mrsimonbennett\Transport\Callback;

/**
 * Class CommandBus
 * @package HireIt\Commanding
 */
class CommandBus
{
    /**
     * @var CommandTranslator
     */
    protected $commandTranslator;

    /**
     * @var \Mrsimonbennett\Transport\Callback
     */
    protected $callback;
    /**
     * @var \Illuminate\Foundation\Application
     */
    private $application;

    /**
     * @param CommandTranslator $commandTranslator
     * @param Application       $application
     */
    public function __construct(CommandTranslator $commandTranslator, Application $application)
    {
        $this->commandTranslator = $commandTranslator;
        $this->application = $application;
    }

    /**
     * @param $command
     * @return mixed
     * @throws \Exception
     */
    public function execute($command)
    {
        $handler = $this->commandTranslator->toCommandHandler($command);

        return $this->application->make($handler)->setCallback($this->callback)->handle($command);
    }

    /**
     * @param \Mrsimonbennett\Transport\Callback $callback
     * @return $this
     */
    public function setCallback(Callback $callback)
    {
        $this->callback = $callback;
        return $this;
    }
} 