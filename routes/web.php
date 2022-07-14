<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\TestController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/custom', function() {
    $msj = 'This is a custom page.';

    return view('custom', ['msj' => $msj]);
});

Route::get('test', [App\Http\Controllers\TestController::class, "test"]);
