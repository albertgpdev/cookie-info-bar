<?php

namespace Albertgpdev\CookieInfoBar;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class CookieInfoBarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('cookie-info-bar', function ($app) {
            return new CookieInfoBar();
        });

        $this->app->afterResolving('blade.compiler', function () {
            $this->addBladeDirective($this->app['blade.compiler']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootConfig();
        $this->loadTranslationsFrom(__DIR__.'/lang', 'albertgpdev-cookie-info-bar');
        $this->loadViewsFrom(__DIR__.'/views', 'albertgpdev-cookie-info-bar');
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
    }

    /**
     * Generates the boot Configuration
     *
     * @return void
     */
    protected function bootConfig()
    {
        $path = __DIR__.'/cookie-info-bar.php';
        $this->mergeConfigFrom($path, 'cookie-info-bar');
        if (function_exists('config_path')) {
            $this->publishes([$path => config_path('cookie-info-bar.php')]);
        }
    }

    /**
     * Extends Compiler implements CompilerInterface
     * @param BladeCompiler $blade
     * @return void
     */
    public function addBladeDirective(BladeCompiler $blade)
    {
        $blade->directive('cookieInfoBar', function ($lang) {
            return "<?php echo app('cookie-info-bar')->render(); ?>";
        });
    }
}
