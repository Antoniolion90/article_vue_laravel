<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Http\Controllers\MainController::class);

Route::group(['namespace' => 'App\Http\Controllers\Article', 'prefix' => 'articles'], function () {
    Route::get('/', 'IndexController')->name('article.index');
    Route::get('/{slug}', 'ShowController')->name('article.show');
});

