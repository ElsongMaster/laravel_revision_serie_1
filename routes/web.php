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




Route::get('/Elvis',function(){
    $h2 = 'Elvis';
    return view('pages.Exo1',compact('h2'));
});


Route::get('/{var}',function($var){

    return view('pages.welcome',compact('var'));
});
