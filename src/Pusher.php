<?php

namespace Kryptonit3\Pusher;

use Illuminate\Support\ServiceProvider;

class PusherServiceProvider extends ServiceProvider
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
        $this->publishes([
            __DIR__.'/config/kryptonit3_pusher.php' => config_path('kryptonit3_pusher.php'),
        ]);
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/kryptonit3_pusher.php', 'kryptonit3_pusher'
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'kryptonit3_pusher',
        ];
    }

}
