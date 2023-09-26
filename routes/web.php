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
    return view('welcome');
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