<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('consent-cookies', function (Request $request) {
    if ($request->has('cookies')) {
        $savedCookies = $request->get('cookies');
    } else {
        $savedCookies = [];
        foreach (config('cookie-info-bar.used_cookies') as $keyGroup => $cookieTypes) {
            foreach ($cookieTypes['values'] as $index => $cookie) {
                $savedCookies[$keyGroup][$cookie['key']] = $request->accepted ? '1' : '0';
            }
        }
    }
    return response('ok', 200)->withCookie(cookie(config('cookie-info-bar.cookie_name'), json_encode($savedCookies), config('cookie-info-bar.cookie_lifetime')));
})->name('consent-cookies');
