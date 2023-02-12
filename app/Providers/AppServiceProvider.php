<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

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
            fn () => Category::orderBy('relevance', 'desc')->has('subCategories')->with('subCategories')->get() // Todo: Cache forever
        );

        $this->app->bind('featured_products',
            fn () => Product::where('featured_at', '!=', null)->has('images')->with('images')->get()->random(4) // Todo: Cache forever
        );

        $this->app->bind('discount_products',
            fn () => Product::where('discount', '!=', 0)->has('images')->with('images')->get() // Todo: Cache forever
        );

        $this->app->bind('brands',
            fn () => Brand::all() // Todo: Cache forever
        );
    }
}
