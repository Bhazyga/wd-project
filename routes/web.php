<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/utama', function () {
    return view('welcome');
});

Route::get('/baji', function () {
    return view('home' , [

        "nama" => "Bhazy Jagow",
        "email" => "bhazyweedre@wd.com",
        "image" => "WD.jpg"


    ]);
});


Route::get('/innertest', function () {
    return inertia::render('test') ;


    });



Route::get('/bajijago', function () {
    return view('about' , [

        "nama" => "Bhazy Jagow",
        "email" => "bhazyweedre@wd.com",
        "image" => "WD.jpg"


    ]);
});

Route::get('/bajibar', function () {
    return view('bar');
});

Route::get('/bajiblog', function () {

$blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "author" => "Bajijago",
        "body"  => "
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, exercitationem. Animi minima dolores fugiat incidunt sunt a nobis quod minus."
    ],
 [
    "title" => "Judul Post kedua",
    "author" => "bajibaji",
    "body"  => "
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam corrupti aut aliquid at animi, repellat nulla ut cumque placeat soluta vitae ab quod facilis totam voluptatum omnis voluptatem nostrum. Voluptas ducimus non vel quaerat, iusto accusamus, iste eos illo unde iure, repudiandae ab! Vero asperiores porro, dolores aliquam minima, eligendi unde non commodi iste amet dolorum aperiam. Sed corrupti similique vero pariatur aut repellat ipsam laboriosam suscipit, voluptates officia modi sunt nam fugit quaerat itaque quam ab! Officia id assumenda error unde, dicta sunt eum voluptatibus excepturi perspiciatis consequuntur aspernatur autem commodi voluptatum, quae deleniti praesentium veritatis dignissimos temporibus natus."
 ],
    ];
    return view('blog' , [

        "judul" => "Blog",
        "blog" => $blog_posts,
        "image" => "WD.jpg"





    ]);
});


route::get('/login',function (){
return view ('login',[

    "image" => "WD.jpg"

]);
});

route::get('/bajikalender',function (){
    return view ('callendar',[

        "image" => "WD.jpg"

    ]);
    });


Route::get('/line-chart',[ChartController::class,'linechart']);
