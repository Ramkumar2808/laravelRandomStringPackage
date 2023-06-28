<?php

namespace MyPackage;

use Illuminate\Support\ServiceProvider;

class RandomStringServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish any necessary assets or configurations here
    }

    public function register()
    {
        $this->app->bind('random-string', function () {
            return new RandomStringGenerator();
        });
    }
}
