<?php
namespace HireIt\Actions;

use Mrsimonbennett\Transport\Callback;

/**
 * Class Action
 * @package HireIt\Action
 */
abstract class Action {

    /**
     * @var \Mrsimonbennett\Transport\Callback
     */
    protected $callback;

    /**
     * @param \Mrsimonbennett\Transport\Callback $callback
     * @return $this
     */
    public function setCallBack(Callback $callback)
    {
        $this->callback = $callback;
        return $this;
    }

}