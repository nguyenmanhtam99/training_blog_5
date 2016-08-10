<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;
use App\Repositories\Entry\EntryRepository;
use App\Repositories\Entry\EntryRepositoryInterface;
use App\Repositories\Comment\CommentRepository;
use App\Repositories\Comment\CommentRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\User\UserRepository;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind(EntryRepositoryInterface::class, EntryRepository::class);
        App::bind(CommentRepositoryInterface::class, CommentRepository::class);
        App::bind(UserRepositoryInterface::class, UserRepository::class);
    }
}
