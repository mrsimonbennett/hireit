<?php


namespace HireIt\Events;


use ReflectionClass;

class EventListener {
    public function handle($event)
    {
        $eventName =$this->getEventName($event);




        if($this->isListenerRegistered($eventName))
        {
            return call_user_func([$this,'when'.$eventName,$event]);
        }
    }

    /**
     * @param $event
     * @return string
     */
    private function getEventName($event)
    {
       return (new ReflectionClass($event))->getShortName();
    }

    /**
     * @param $eventName
     * @return bool
     */
    private function isListenerRegistered($eventName)
    {
        $method = "when{$eventName}";
        return method_exists($this, $method);
    }
} 