<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

/**
 * کلاس AppServiceProvider مسئول ثبت و راه‌اندازی خدمات برنامه است.
 *
 * این کلاس شامل متدهایی برای ثبت خدمات و راه‌اندازی مسیرها می‌باشد.
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * ثبت هرگونه خدمات برنامه.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * راه‌اندازی هرگونه خدمات برنامه.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }

    /**
     * نقشه‌برداری از مسیرهای API.
     *
     * این متد مسیرها را با پیشوند 'api' و middleware مربوطه تنظیم می‌کند.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->group(base_path('routes/api.php'));
    }
}
