<?php

namespace SanTran\BrowserNotifications;

use Illuminate\Support\ServiceProvider;

class BrowserNotificationsProvider extends ServiceProvider
{

    protected $defer = false;

    public function boot()
    {
        // Publish config files
        /* $this->publishes([
          __DIR__ . '/config/mobicard.php' => config_path('mobicard.php'),
          ]); */
    }

    public function register()
    {
        include __DIR__ . '/routes.php';
        $this->app->make('BrowserNotificationsController');
    }

}
