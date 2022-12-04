<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('users', UserController::class);
    $router->resource('footers', FooterController::class);
    $router->resource('prices', PriceController::class);
    $router->resource('tags', TagController::class);
    $router->resource('banner-vedios', BannerVedioController::class);
    $router->resource('our-stories', OurStoryController::class);
    $router->resource('story-photos', StoryPhotoController::class);
    $router->resource('services', ServiceController::class);
    $router->resource('home-banners', HomeBannerController::class);
});
