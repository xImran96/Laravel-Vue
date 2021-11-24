<?php

namespace App\Providers;

use App\Repositories\UserRepositoryInterface;
use App\Repositories\Eloquent\UserRepository;
use App\Repositories\EmployeeRepositoryInterface;
use App\Repositories\Eloquent\EmployeeRepository;
use App\Repositories\EloquentRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(EmployeeRepositoryInterface::class, EmployeeRepository::class);
  
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
