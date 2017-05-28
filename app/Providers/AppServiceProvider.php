<?php

namespace App\Providers;

<<<<<<< HEAD
use App\Http\Model\ArticleModel;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
=======
use Illuminate\Support\ServiceProvider;
>>>>>>> c070b3caa5208f80ecf968946c1405e9bd906b66

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        $val = ArticleModel::Article_OrderByClick();
        View::share('val',$val);
=======
        //
>>>>>>> c070b3caa5208f80ecf968946c1405e9bd906b66
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
