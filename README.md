# Cookie Info Bar

## Installation

```
composer require albertgpdev/cookie-info-bar
```

## Laravel >5

### Setup

Add ServiceProvider to the providers array in `app/config/app.php`.

```
Albertgpdev\CookieInfoBar\CookieInfoBarServiceProvider::class,
```

> It also supports package discovery for Laravel 5.5.

### Configuration

Add `COOKIE_INFO_BAR_ENABLED`, `COOKIE_INFO_BAR_CUSTOMIZABLE` to **.env** file.

```
// You can also add this customizable options
COOKIE_INFO_BAR_TYPE='modal' or 'bar'
COOKIE_INFO_BAR_NAME
COOKIE_INFO_BAR_LIFETIME
```

### Usage on your blade files

CookieInfoBar has two methods to use on the blade: `@cookieInfoBar()` and `@editCookies()`.

`@cookieInfoBar()` is responsible for displaying the modal or the bar at the bottom.

`@editCookies` is an anchor that accepts a text as a parameter to go, for example from the footer to the edit screen once accepted or rejected
