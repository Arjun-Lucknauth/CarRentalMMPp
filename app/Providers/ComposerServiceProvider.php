<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     * This will render the callbacks in views every time we travel from 1 page to another. This will allow the function
     * to be called in multiple pages without having to write the codes multiple times.
     * @return void
     */
    public function boot()
    {
        view()-> composer(
            'app',
            'App\Http\viewComposers\multipleHeader','App\Http\viewComposers\frontDetails'

        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
