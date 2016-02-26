<?php

namespace DevMaurice\AfricansTalkGateway;

use DevMaurice\AfricansTalkGateway\AfricansTalkGateway;
use Illuminate\Support\ServiceProvider;

class AfricansTalkGatewayServiceProvider extends ServiceProvider
{
    protected $username;
    protected $api_key;
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->username = env('afriname');
        $this->api_key = env('api_key');

        $this->app->bind('AfricansTalkGateway', function(){
            return new AfricansTalkGateway($this->username, $this->api_key);
        });
    }
}