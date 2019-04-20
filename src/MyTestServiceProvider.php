<?php

    namespace Phuvo\Apinhoma;
    use Illuminate\Support\ServiceProvider;
    class MyTestServiceProvider extends ServiceProvider {
        public function boot()
        {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $this->loadViewsFrom(__DIR__.'/views', 'nhoma');
            // $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
        }
        public function register()
        {
        }
    }
?>