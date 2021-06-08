<?php

namespace App\Providers;

use App\Rules\PhoneRule;

use App\Validator\CustomValidator;
use Illuminate\Support\ServiceProvider;
use \Illuminate\Validation\Validator;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Validator::resolver(function ($translator, $data, $rules, $messages, $attributes) {
            return new PhoneRule($translator, $data, $rules, $messages, $attributes);
        });
    }
}
