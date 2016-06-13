<?php
namespace JJSoft\SigesUI\Providers;

use Illuminate\Support\ServiceProvider;

class SigesUIServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'sigesui');
        $this->publishes([
            __DIR__.'/../../public' => public_path(),
        ], 'sigespublic');
        $this->publishes([
            __DIR__.'/../../resources/views' => base_path('resources/views/vendor/sigesui'),
        ], 'sigesviews');
    }
}
