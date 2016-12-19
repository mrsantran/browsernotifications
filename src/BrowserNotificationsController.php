<?php

namespace SanTran\BrowserNotifications;

use Illuminate\Routing\Controller as BrowserController;

class BrowserNotificationsController extends BrowserController
{

    public function index()
    {
        return response('document.addEventListener("DOMContentLoaded", function ()
                {
                    if (Notification.permission !== "granted")
                    { Notification.requestPermission(); }
                    else { console.log("Notification granted."); }
                });
                function showNotification(title, body, url, icon)
                {
                    if (!Notification || typeof Notification === "undefined") {
                        console.log("Desktop notifications is not available in your browser..");
                        return;
                    }
                    if (Notification.permission !== "granted")
                    { Notification.requestPermission(); } else {
                        if (icon) { var notification = new Notification(title, {icon: icon, body: body}); }
                        else { var notification = new Notification(title, {body: body}); }
                        notification.onclick = function () {
                            if (url) { window.open(url); }
                        };
                        notification.onclose = function () { console.log("Notification closed"); };
                    }
                }', 200)->header('Content-Type', 'application/javascript');
    }

}
