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

echo date('h:i:s') . "<br>";

//sleep for 3 seconds
sleep(480);

//start again
echo date('h:i:s') . "<br>";

Route::get('/', function () {
    return  "hello good sir, today is 23062022-1";
});
