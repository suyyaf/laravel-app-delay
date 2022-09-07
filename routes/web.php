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
//this is the where the sleep function starts:
echo date('h:i:s') . "<br>";

//sleep for 10min
// sleep(600);

//start again
echo date('h:i:s') . "<br>";
echo date('h:i:s') . "<br>";


Route::get('/', function () {
    return  "hello good sir, today is 07092022";
});
