<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
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
    return view('welcome');
});


Route::get("/home",[homecontroller::class,"index"]);
Route::view("profile","profile");
Route::POST("/add",[homecontroller::class,"add"]);
Route::POST("/userlogin",[homecontroller::class,"userlogin"]);

Route::get('/logout', function () {
    if(session()->has("name"))
    {
        session()->pull("name",null);
    }
    return redirect("home");
});
Route::get('/back',function()
{
    return redirect("home");
});
?>