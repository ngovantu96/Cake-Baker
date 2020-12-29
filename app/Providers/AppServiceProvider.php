<?php

namespace App\Providers;

use App\Http\Repositories\ProductRepo\ProductRepositoryInterface;
use App\Http\Repositories\ProductRepo\ProductRepository;
use App\Http\Repositories\UserRepo\UserRepository;
use App\Http\Repositories\UserRepo\UserRepositoryInterface;
use App\Http\Repositories\RoleRepo\RoleRepository;
use App\Http\Repositories\RoleRepo\RoleRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Http\Repositories\CategoryRepo\CategoryRepository;
use App\Http\Repositories\CategoryRepo\CategoryRepositoryInterface;
use Illuminate\Database\DatabaseManager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(RoleRepositoryInterface::class,RoleRepository::class);
        $this->app->bind(UserRepositoryInterface::class,UserRepository::class);
        $this->app->bind(ProductRepositoryInterface::class,ProductRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
