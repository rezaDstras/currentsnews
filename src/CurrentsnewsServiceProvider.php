<?php

namespace EhsanDastras\CurrentsNews;
use Illuminate\Support\ServiceProvider;

class CurrentsnewsServiceProvider extends ServiceProvider
{
    public function boot()
    {
//        dd("package works well");
        $this->publishes([
            __DIR__ . '/../config/currentsnews.php' =>config_path('currentsnews.php')
        ]);
    }

    public function register()
    {
        $this->app->singleton(Currentsnews::class,function (){
            return new Currentsnews();
        });
    }
}
