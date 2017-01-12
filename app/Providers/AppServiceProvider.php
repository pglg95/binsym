<?php

namespace App\Providers;

use App\Currency;
use DateTime;
use Illuminate\Foundation\Auth\User;
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
                //$currentDate=DateTime::createFromFormat('d-m-Y',date('d-m-Y', time()) );
                $userDate=DateTime::createFromFormat('d-m-Y H',$value);

                $lastRatingTime=DateTime::createFromFormat('Y-m-d H:i:s',Currency::select('updated_at')->first()->updated_at);

                if ($parsed['error_count'] === 0 && $parsed['warning_count'] === 0 && $userDate > $lastRatingTime) {
                    return true;
                }
            }

            return false;
        });

        Validator::extend('user_old_pass_validator',function($attribute, $value, $formats){
            return \Hash::check($value,\Auth::user()->getAuthPassword());
        });

        Validator::extend('email_existing',function($attribute, $value, $formats){
            if(User::where('email','=',$value)->count() < 1) return false;
            else return true;
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
