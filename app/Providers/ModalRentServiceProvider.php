<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class ModalRentServiceProvider extends ServiceProvider
{
    private $parameter;

    public function __construct($app, $parameters=[])
    {
        parent::__construct($app);
        $this->parameter = $parameters['parameter'] ?? '';
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

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
  
        View::composer('dashboard.partials.modal-rent', function ($view){
            $view->with('datasRent', $this->parameter);
        });

    }

    public static function updateData()
    {
        View::composer('dashboard.partials.modal-rent', function ($view){
            $view->with('datasRent', $this->parameter);
        });

    }
}
