<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

include __DIR__ . '/product/routes.php';
include __DIR__ . '/cart/routes.php';
include __DIR__ . '/order/routes.php';
include __DIR__ . '/challenge/routes.php';
include __DIR__ . '/admin/routes.php';
