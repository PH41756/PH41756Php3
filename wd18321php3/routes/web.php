<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserConTroller;
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
//get post =>> method http
//[http://127.0.0.1:8000] base url
Route::get('/', function(){
    echo 'hieu';
});
Route::get('/trang-chu', function(){
    echo 'trang chu';
});
Route::get('/list-user',[UserConTroller::class,'showUser']);
//slug
//http://wd18321php3.test/list-user/1(sau list-user/1/2/3/4 are slug)
Route::get('/get-user/{id}/{name?}',[UserConTroller::class,'getUser']);

//param
//http://wd18321php3.test/update-user?id=1&name-hieu
Route::get('/update-user',[UserConTroller::class,'updateUser']);

//bai tap
Route::get('/thong-tin-sv',[UserConTroller::class,'thongTinSv']);
