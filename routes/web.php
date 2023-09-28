<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\login;


use App\Http\Controllers\ChartController;
use Inertia\Inertia;

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


Route::get('/login', function () {
    return view('login');
});


Route::get('user', [login::class,'getdata']);







 Route::get('/utama', function () {
    return view('welcome');
});

Route::get('/  ', function () {
    return view('home' , [
        "navlink" => "home"



    ]);
});


Route::get('/innertest', function () {
    return inertia::render('test') ;


    });



Route::get('/bajijago', function () {
    return view('about' , [
        "navlink" => "about",

        "nama" => "Dwiki Stark",
        "email" => "Project Manajer",
        "image" => "wiki.png",

        "nama1" => "Baji jago",
        "email1" => "Petani digital",
        "image1" => "baji.png",

        "nama2" => "Haycal Rayhansyah",
        "email2" => "Orang Biasa",
        "image2" => "haycal.png",

        "nama3" => "Habibi Rahman",
        "email3" => "Wakil Manajer",
        "image3" => "habibi.jpg",

    ]);
});

Route::get('/bajibar', function () {

    return view('bar');
});

Route::get('/bajiblog', function () {

$blog_posts = [
    [
        "title" => "Visi",
        "author" => "WD CODING",
        "body"  => "
        Minimal bikin orang ga goblok"
    ],
 [
    "title" => "Misi",
    "author" => "WD CODING",
    "body"  => "
    Mencari uang sebanyak banyaknya"
 ],
    ];
    return view('blog' , [
        "navlink" => "blog",

        "judul" => "Blog",
        "blog" => $blog_posts,
        "image" => "WD.jpg"

    ]);
});



route::get('/calendar',function (){
    return view ('calendar',[

        "image" => "WD.jpg"

    ]);
    });


Route::get('/line-chart',[ChartController::class,'linechart']);
