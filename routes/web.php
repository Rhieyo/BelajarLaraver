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
METHOD
1.GET = Mengambil Data
2.POST = Membuat Data Baru
3.PATCH = Mengubah Data Sebagian
4.PUT = Mengubah Data Keseluruhan
5.DELETE = Menghapus data




*/
use App\Blog;
use Illuminate\Http\Request;

Route::get('/', function () { //untuk memanggil tampilan data blog
    $data = Blog::all();
    return view('blogs', compact('data'));

});



//diambil dari file resources/view/blog-create.blade.php
Route::get('/create', function () { //untuk menampilkan form blog baru
    return view('blog-create');
});


//untuk memanggil tampilan dan data blog berdasarkan id
Route::get('/show/{blog_id}', function($blog_id) { 
    $data = blog::find($blog_id); //memanggil data berdasarkan id
    return view('Blog-show', compact('data'));
});

Route::post('/store', function (Request $request) { //untuk mengirimkan data
    // dd($request);
    $data = new Blog;
    $data->title =$request->title;
    $data->description = $request->description;
    $data->save();

    return redirect("/")->with('alert','Blog Telah Ditambahkan');
});


//diambil dari file resources/view/blog-update.blade.php
Route::get('/update/{blog_id}', function ($blog_id) { // 
    $data = Blog::find($blog_id);

    return view('blog-update', compact("data"));
});

Route::patch("/update/{blog_id}", function(Request $request, $blog_id){
    //panggil data
    $data = blog::find($blog_id);
    $data->title = $request->title;
    $data->description =$request->description;
    $data->save();

    return redirect('/')->with('alert', 'Data Telah Di Update');
});

Route::get("/delete/{blog_id}",function($blog_id){
    $data = blog::find($blog_id);
    $data->delete();

    return redirect()->back()->with("alert", "Data Telah Dihapus");
});