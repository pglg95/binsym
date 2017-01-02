<?php

namespace App\Providers;

use DateTime;
use Illuminate\Support\ServiceProvider;
use Validator;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('special_date_validator', function($attribute, $value, $formats) {
            foreach($formats as $format) {

                $parsed = date_parse_from_format($format, $value);
                $currentDate=DateTime::createFromFormat('d-m-Y H',date('d-m-Y H', time()) );
                $userDate=DateTime::createFromFormat('d-m-Y H',$value);

                if ($parsed['error_count'] === 0 && $parsed['warning_count'] === 0 && $userDate > $currentDate) {
                    return true;
                }
            }

            return false;
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
