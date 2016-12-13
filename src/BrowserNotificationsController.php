<?php

namespace SanTran\BrowserNotifications;

use Illuminate\Routing\Controller as BrowserController;

class BrowserNotificationsController extends BrowserController
{

    public function index()
    {
        return 'document.addEventListener("DOMContentLoaded", function ()
                {
                    if (Notification.permission !== "granted")
                    { Notification.requestPermission(); }
                });
                function showNotification(title, body, url, icon)
                {
                    if (!Notification) {
                        console.log("Desktop notifications is not available in your browser..");
                        return;
                    }
                    if (Notification.permission !== "granted")
                    { Notification.requestPermission(); } else {
                        var notification = new Notification(title, {icon: icon, body: body});
                        notification.onclick = function () {
                            if (url) { window.open(url); }
                        };
                        notification.onclose = function () { console.log("Notification closed"); };
                    }
                }';
    }

}
