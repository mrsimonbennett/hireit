<?php


namespace HireIt\Models\ServiceProviders;


use Illuminate\Support\ServiceProvider;

class Model extends ServiceProvider{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('HireIt\Models\Repository\BoatInterface', 'HireIt\Models\Orm\EloquentService\Boat');
    }
}