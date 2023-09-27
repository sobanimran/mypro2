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
    return view('index1');
});
Route::get('demo/{name}/{id?}/{com?}', function (string $name,int $id=null,string $com=null) {
    if($id){

        $data = compact('name','id','com');
        return view('demo')->with($data);
    }else{
        return '<script>alert("please pass id")</script>';
    }
})->whereAlpha('name')->whereNumber('id')->whereIn('com',['movie','song','webseries']);
Route::view('/post','pos');
Route::get('/home/about',function(){
return view('about');
})->name('about');

Route::get('/test',function(){  // use ridirection if some one bookmark our page so access throw redirect other wise face 404 error
    return view('contact'); 
}); 
Route::redirect('/contact','/test',301); //3rd permiter for serch engine 301-permanent 302- temporary many more
// all route inside this prefix funftion bydefult add page route 
Route::prefix('page')->group(function(){
    Route::get('/firstpage',function (){
        return view('firstpage');
    });
    Route::get('/secpage',function (){
        return view('secpage');
    });
}); 
Route::fallback(function(){
return '<h1 align="center"> page not found</h1>'; // you can also return vie page also 
});
