<?php


namespace Mrsimonbennett\Transport;


class Callback {
    /**
     * @var mixed
     */
    protected $listener;

    /**
     * @var string
     */
    protected $methodSuccess;

    /**
     * @var string
     */
    protected $methodFailure;
    /**
     * @var string
     */
    protected $name;

    /**
     * @param mixed $listener
     * @param string $methodSuccess
     * @param string $methodFailure
     */
    public function __construct($listener, $methodSuccess, $methodFailure = null)
    {
        $this->listener = $listener;
        $this->methodSuccess = $methodSuccess;
        $this->methodFailure = $methodFailure;
        $this->name = get_class($this->listener);

    }
    public function name($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * @return mixed
     */
    public function Success()
    {
        \Event::fire('success.'. $this->name,func_get_args());
        \Log::info('success.'. $this->name);

        return call_user_func_array([$this->listener,$this->methodSuccess],func_get_args());
    }

    /**
     * @return mixed
     */
    public function Failure()
    {
        \Event::fire(get_class($this->listener). '.' . 'failure',func_get_args());
        \Log::info('success.'. $this->name);

        return call_user_func_array([$this->listener,$this->methodFailure],func_get_args());
    }
} 