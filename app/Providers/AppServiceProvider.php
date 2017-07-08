<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        # https://github.com/laravel/framework/issues/17508#issuecomment-274881144
        Schema::defaultStringLength(191);

        Validator::extend('filename_regex', function ($attribute, $value, $parameters, $validator) {

            $original_name = $value->getClientOriginalName();
            //preg_match('/(\d+)-(\w+)/', $origname, $matches);
            preg_match($parameters, $origname, $matches);

            return count($matches) > 0;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
