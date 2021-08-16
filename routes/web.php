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



Route::get('/',function(){
    return view('template.index');
});

Route::get('/Elvis',function(){
    $h2 = 'Elvis';
    return view('pages.Exo1',compact('h2'));
})->name('Elvis');


Route::get('/Exo2/{var}',function($var){

    return view('pages.welcome',compact('var'));
});


Route::get('/Exo3', function(){
    $var2 = 'a';
    $var3 = 'e';
    return view('pages.Exo3', compact('var2','var3'));

})->name('Exo3');



Route::get('couleur/{color}',function($color){
    $listColor = ["red","blue","green"];
    $objColor= (object)["red"=>"text-danger","blue"=>"text-info","green"=>"text-success"];
    return view('pages.couleurs',compact('color','listColor',"objColor"));
});
