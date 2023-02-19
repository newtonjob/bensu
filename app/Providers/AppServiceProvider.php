<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerMigrationMacros();
        $this->registerSiteSetting();
        $this->registerCacheableApplicationModels();

        Paginator::useBootstrapFive();
    }

    public function registerMigrationMacros()
    {
        Blueprint::macro('authors', function () {
            $this->foreignId('created_by')->nullable()->constrained('users');
            $this->foreignId('updated_by')->nullable()->constrained('users');
        });
    }

    public function registerSiteSetting()
    {
        $this->app->instance(Setting::class,
            Cache::rememberForever('setting', fn () => Setting::firstOrFail())
        );
    }

    public function registerCacheableApplicationModels()
    {
        $this->app->bind('categories',
            fn () => Category::latest('relevance')->withWhereHas('subCategories')->get() // Todo: Cache forever
        );

        $this->app->bind('featured_products',
            fn () => Product::featured()->withWhereHas('images')->get() // Todo: Cache forever
        );

        $this->app->bind('brands',
            fn () => Brand::all() // Todo: Cache forever
        );
    }
}