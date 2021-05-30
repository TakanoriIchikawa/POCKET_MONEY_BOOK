<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryBindServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\User\UserRepositoryInterface::class,
            \App\Repositories\User\UserRepository::class
        );
        $this->app->bind(
            \App\Repositories\GiftItem\GiftItemRepositoryInterface::class,
            \App\Repositories\GiftItem\GiftItemRepository::class
        );
        $this->app->bind(
            \App\Repositories\GiftCategory\GiftCategoryRepositoryInterface::class,
            \App\Repositories\GiftCategory\GiftCategoryRepository::class
        );
    }

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
