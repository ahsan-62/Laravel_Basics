<?php

use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {


$product=[
    1=>[
        'Name'=>'Ahsan',
        'Class'=>'Laravel 10',
        'Id'=>'180119'

    ],
    2=>[
        'Name'=>'Al',
        'Class'=>'Laravel 10',
        'Id'=>'180118'

    ],
    3=>[
        'Name'=>'Jun',
        'Class'=>'Laravel 10',
        'Id'=>'180117'

    ],

];

$product_count=count($product);

return response()->json([

    'product'=>$product,
    'product_count'=>$product_count
],200);


})->name('home');

Route::get('/about',function(){

    return view('about');
})->name('about');

Route::get('/contact',function(){

return view('contact');

})->name('contact');

Route::get('/service',function(){

    $ahsan=[

        'ahsan',
        'jun',
        '62'

    ];

return view('service',compact('ahsan'));

})->name('service');





Route::get('/user/{name}/{id}',function($name,$id){

    echo $name." ".$id ;
})->where(['name'=>'[A-Za-z]+','id'=>'[0-9]+']);


Route::get('/category/{name}',function($name){

    echo $name;
})->whereIn('name',['ahsan','jun','Tajrian']);


Route::get('/hello/{write}',function($write){

echo $write;

})->where('write','.*');


Route::get('/course-content/download',function(){

return response()->download(public_path('/ahsan.pdf'),'ahsanjun.pdf');

});
