<?php

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
use App\Blog;
Route::get('/', function () {
    $data =Blog::all();
    return view('blogs', compact('data'));

});


Route::get('/create', function () {
    return view('blog-create');
});


Route::get('/update', function () {
    return view('blog-update');
});
