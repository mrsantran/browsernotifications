Laravel 5 Browser Notifications
======================

[![Total Downloads](https://img.shields.io/packagist/dt/santran/browsernotifications.svg)](https://packagist.org/packages/santran/browsernotifications)
[![Paypal Donate](https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif)](paypal.me/MrSanTran)

![screen shot 2016-12-14 at 14 07 33](https://cloud.githubusercontent.com/assets/21286108/21172827/d4632862-c206-11e6-9366-ee2a428c6ca5.png)

Install (Laravel)
-----------------
Install via composer
```
composer require santran/browsernotifications:dev-master
```

Add Service Provider to `config/app.php` in `providers` section
```php
SanTran\BrowserNotifications\BrowserNotificationsProvider::class
```

Publish config file and view file, open console and enter bellow command:
```php
php artisan vendor:publish
```
Config file 'browsernotifications.php' : version change

How to use ?
Open your layouts file and add js to view.
```javascript
@include("browsernotifications.browsernotifications")
```

Call js to show Notification:
```javascript
$(document).ready(function () {
  showNotification(title, content, url, icon);
});
```

Any Q/A, Please contact to me.
Skype: santd86
Email: santran686@gmail.com
