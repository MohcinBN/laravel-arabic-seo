<?php

namespace ArabicSeo\Seo;
use Illuminate\Support\ServiceProvider;
use ArabicSeo\Seo\Helpers\SeoManager;  

class SeoServiceProvider extends ServiceProvider {
    public function register() {
        $this->mergeConfigFrom(__DIR__.'/../config/arabic-seo.php', 'arabic-seo');
        $this->app->singleton('seo', function () {
            return new SeoManager();
        });
    }

    public function boot() {
        $this->publishes([
            __DIR__.'/../config/arabic-seo.php' => config_path('arabic-seo.php'),
        ], 'arabic-seo-config');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'arabic-seo');
    }
}
