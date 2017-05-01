<?php

namespace Kingsley\Comments;

use Illuminate\Support\ServiceProvider;

class CommentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Configs
        $this->publishes([
            __DIR__.'/../config/comments.php' => config_path('comments.php')
        ], 'config');

        // Migrations
        $this->publishes([
            __DIR__.'/../database/migrations/create_comments_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_comments_table.php')
        ], 'migrations');

        // Assets
        $this->publishes([
            __DIR__.'/../resources/assets/js' => public_path('js'),
            __DIR__.'/../resources/assets/css' => public_path('css')
        ], 'assets');

        // Routes
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/comments.php', 'comments');
    }
}
