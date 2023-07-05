<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    $routeCollection = Route::getRoutes();

    foreach ($routeCollection as $value) {
        $routeArray[] = [
            "uri"     => $value->uri,
            "methods" => $value->methods,
        ];
    }

    return view("pages.index", compact('routeArray'));
})->name("index");
