<?php


namespace HireIt\Events;

use Illuminate\Support\ServiceProvider;

class EventingServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $listeners = $this->app['config']->get('hire.listeners');
        if(count($listeners)) {
            foreach ($listeners as $listener) {
                $this->app['events']->listen('HireIt.*', $listener);
            }
        }
    }
}