<?php


namespace HireIt\Commanding;

use Mrsimonbennett\Transport\Callback;

/**
 * Class CommandHandler
 * @package HireIt\Commanding
 */
abstract class CommandCallback {

    /**
     * @var  \Mrsimonbennett\Transport\Callback $callback
     */
    protected $callback;

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