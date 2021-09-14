<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::Get('/', function ($id) {
    echo "Selamat Datang";
});

Route::Get('/about', function () {
    echo "NIM : 2031710161";
    echo "<br>";
    echo "Nama : Bayu Prasetyo";
});

Route::Get('/articles/{id}', function ($id) {
    return $id;
});

// Route::Get('/', [HomeController::class, 'index']);

Route::group(["prefix"=>"/program"], function(){
    Route::get("/karir", function(){
        echo "Karir";
    });
    Route::get("/magang", function(){
        echo "Magang";
    });
    Route::get("/kunjungan-industri", function(){
        echo "Kunjungan industri";
    });
});

Route::get("/news/{id}", function($id){
    return "news ".$id;
});

Route::group(["prefix"=>"/category"], function(){
    Route::get("/marbbel-edu-games", function(){
        echo "Marbel edu games";
    });
    Route::get("/marbbel-and-friends-kid-games", function(){
        echo "Marbel kid games";
    });
    Route::get("/riri-story-books", function(){
        echo "Riri story books";
    });
    Route::get("/kolak-kids-songs", function(){
        echo "Kolak story";
    });
});

Route::Get('/about-us', [AboutController::class, 'about']);
Route::resource('/contact-us', ContactController::class);

    