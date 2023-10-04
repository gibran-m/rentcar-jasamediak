<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use DB;

class DashboardServiceProvider extends ServiceProvider
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
        View::composer('dashboard.index', function ($view){
            $total = DB::select("
            SELECT
                SUM( CASE WHEN tersedia = 1 THEN 1 ELSE 0 END ) AS tersedia,
                SUM( CASE WHEN tersedia = 0 THEN 1 ELSE 0 END ) AS disewa 
            FROM
                `mobil`");
            $tersedia = $total[0]->tersedia;
            $terpinjam = $total[0]->disewa;

            // $today = date("Y-m-d H:i:s");
            // $start_week =  date("Y-m-d",strtotime('last monday'));

            // $start_month =  date("Y-m-d",strtotime('first day of this month'));
            // $end_month =  date("Y-m-d",strtotime('last day of this month'));

            // $start_year =  date("Y-m-d",strtotime('first day of january this year'));
            // $end_year =  date("Y-m-d",strtotime('last day of december this year'));


            $view->with('tersedia',$tersedia);
            $view->with('terpinjam',$terpinjam);
        });
    }
}
