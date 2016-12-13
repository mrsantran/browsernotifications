<?php

namespace SanTran\BrowserNotifications;

use Illuminate\Support\ServiceProvider;

class BrowserNotificationsProvider extends ServiceProvider
{

    protected $defer = false;

    public function boot()
    {
        // Publish view file
        $this->publishes([
          __DIR__ . '/views/browsernotifications/browsernotifications.php' => resource_path('browsernotifications/browsernotifications.php'),
          ]);
    }

    public function register()
    {
        include __DIR__ . '/routes.php';
        $this->app->make('SanTran\BrowserNotifications\BrowserNotificationsController');
    }

}
