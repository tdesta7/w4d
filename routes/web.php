<?php

use App\Http\Controllers\TypeToolController;
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

Route::get('/', function () {
    return view('welcome',['greeting'=>'Welcome Laravel is cool']);
});

Route::get('/catagory', function () {
    return view('catagory-type');
});

Route::get('/config', function () {
    return phpinfo();
});

Route::get('/tools', [TypeToolController::class, 'show']);


