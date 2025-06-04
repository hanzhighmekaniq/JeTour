<?php

namespace App\Providers;

use Midtrans\Config;
use App\Models\Destination;
use App\Services\UserService;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use App\Contracts\UserServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserServiceInterface::class, UserService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }
        Config::$serverKey = 'Mid-server-xm5PqMZAVRHuNNVGFkNNNoAi';
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        View::composer('*', function ($view) {
            // Ambil parameter 'name' dari route jika ada
            $name = request()->route('name');

            $destination = null;

            if ($name) {
                $destination = Destination::where('name', $name)->first();
            }

            // Kirim variabel $destination ke semua view
            $view->with('destination', $destination);
        });
    }
}
