<?php

namespace App\Providers;

use App\Contracts\AttributeContract;
use App\Contracts\BrandContract;
use App\Contracts\CategoryContract;
use App\Contracts\ProductContract;
use App\Repositories\AttributeRepository;
use App\Repositories\BrandRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CategoryContract::class  , CategoryRepository::class);
        $this->app->bind(AttributeContract::class  , AttributeRepository::class);
        $this->app->bind(BrandContract::class  , BrandRepository::class);
        $this->app->bind(ProductContract::class  , ProductRepository::class);
    }

//CategoryContract::class         =>          CategoryRepository::class,
//AttributeContract::class        =>          AttributeRepository::class,
//BrandContract::class            =>          BrandRepository::class,
//ProductContract::class          =>          ProductRepository::class,
//OrderContract::class            =>          OrderRepository::class,





    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
