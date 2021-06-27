<?php

use App\Http\Controllers\{
    SiteController
};
use Illuminate\Support\Facades\Route;

Route::resource('site', SiteController::class);
Route::get('/', function () {
    return view('welcome');
});
