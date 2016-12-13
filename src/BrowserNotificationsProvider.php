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
          __DIR__ . '/views/browsernotifications.blade.php' => resource_path('views/browsernotifications/browsernotifications.blade.php'),
          ]);
    }

    public function register()
    {
        include __DIR__ . '/routes.php';
        $this->app->make('SanTran\BrowserNotifications\BrowserNotificationsController');
    }

}
