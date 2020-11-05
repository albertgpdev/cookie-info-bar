<?php

namespace Albertgpdev\CookieInfoBar;

use Illuminate\Support\Facades\Cookie;

class CookieInfoBar
{
    const TYPE_BAR = 'bar';
    const TYPE_MODAL = 'modal';

    public function render()
    {
        $type = config('cookie-info-bar.type');
        $cookies = null;
        if (isset($_COOKIE[config('cookie-info-bar.cookie_name')])) {
            $cookies = json_decode($_COOKIE[config('cookie-info-bar.cookie_name')], true);
        }
        $needsOnView = [
            'usedCookies' => config('cookie-info-bar.used_cookies'),
            'enabled' => config('cookie-info-bar.enabled'),
            'allowCustomize' => config('cookie-info-bar.allow_customize'),
            'type' => $type,
            'cookies' => $cookies
        ];
        if ($type === CookieInfoBar::TYPE_BAR) {
            $view = view('albertgpdev-cookie-info-bar::cookie-info-bar')->with($needsOnView)->render();
        } else {
            $view = view('albertgpdev-cookie-info-bar::cookie-info-modal')->with($needsOnView)->render();
        }

        return $view;
    }
}
