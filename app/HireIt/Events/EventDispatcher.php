<?php


namespace HireIt\Events;

use Illuminate\Events\Dispatcher;
use Illuminate\Log\Writer;

class EventDispatcher {
    /**
     * @var \Illuminate\Events\Dispatcher
     */
    private $dispatcher;
    /**
     * @var \Illuminate\Log\Writer
     */
    private $writer;

    /**
     * @param Dispatcher $dispatcher
     * @param Writer     $writer
     */
    public function __construct(Dispatcher $dispatcher, Writer $writer)
    {
        $this->dispatcher = $dispatcher;
        $this->writer = $writer;
    }

    public function dispatch(array $events)
    {
        foreach($events as $event)
        {
            $eventName = $this->GetEventName($event);
            $this->dispatcher->fire($eventName,$event);
            $this->writer->info("{$eventName} was fired");
        }
    }

    /**
     * @param $event
     * @return mixed
     */
    private function GetEventName($event)
    {
       return str_replace('\\', '.', get_class($event));
        return $eventName;
}