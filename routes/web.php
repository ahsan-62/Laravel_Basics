<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about',function(){

    return view('about');
})->name('about');

Route::get('/contact',function(){

return view('contact');

})->name('contact');

Route::get('/service/{service_id}/{service_name?}',function($service_id,$service_name=null){

return "service".$service_id." ".$service_name;

})->name('service');





// Route::get('/user/{name}/{id}',function($name,$id){

//     echo $name." ".$id ;
// })->where(['name'=>'[A-Za-z]+','id'=>'[0-9]+']);


Route::get('/user/{name}',function($name){

    echo $name;
})->whereIn('name',['ahsan','jun','Tajrian']);

