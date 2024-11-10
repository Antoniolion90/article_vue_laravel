<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Http\Controllers\MainController::class)->name('main');

Route::group(['namespace' => 'App\Http\Controllers\Article', 'prefix' => 'articles'], function () {
    Route::get('/', 'IndexController')->name('article.index');
    Route::get('/{slug}', 'ShowController')->where('slug', '[-\w]+')->name('article.show');
});

