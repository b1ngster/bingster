<?php

use Illuminate\Http\Response;
use  Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Octane\Facades\Octane;
use \App\Http\Controllers\PagesController;

//use \App\Http\Controllers\ArticlesController;

//use \App\Http\Controllers\BlogController;
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

Route::get('/articles/{category?}/{topic?}/{subject?}/{page?}',[PagesController::class, 'show']);


Route::get('/blog/{category?}/{topic?}/{subject?}/{page?}',[PagesController::class, 'show']);


Route::get('/projects/{category?}/{topic?}/{subject?}/{page?}',[PagesController::class, 'show']);



Route::get('/pages/{category?}/{topic?}/{subject?}/{page?}',[PagesController::class, 'show']);




/*

Route::get('/articles/{category?}/{topic?}/{subject?}/{page?}', function (Request $request, $category = null, $topic = null, $subject = null, $page = null) {
    return (new PagesController)->show($request,  $category = null, $topic = null, $subject = null, $page = null);
});
/*
Route::fallback(function (Request $request) {
    echo $request;
});

//Octane::route('GET', '/', function () {
//    return new Response(view('welcome'));
//});



//Octane::route('GET', '/articles/{category?}/{topic?}/{subject?}{page?}', function (Request $request, $path = null, $category, $topic = null, $page = null) {
 //   return (new ArticlesController)->show($request, $path, $category, $topic, $page);
//});


//Octane::route('GET', '/projects/{category}/{topic?}/{page?}', function (Request $request, $path = null, $category, $topic = null, $page = null) {
//    return (new ProjectsController)->show($request, $path, $category, $topic, $page);
//});



//Octane::route('GET', '/projects/{category?}/{topic?}/{subject?}{page?}', function (Request $request,  $category=null, $topic = null, $page = null) {
//    return (new ArticlesController)->show($request, $path, $category, $topic, $page);
//});




//Octane::route('GET', '/', function() {
//        return Route::toResponse($request, view('welcome'));
//});
/*
Octane::route('GET', '/articles/{path?}', function() {
    return new Response(
      (new ArticlesController)->show());
});


//Route::get('/pages/{path?}', [PagesController::class, 'show']);

Route::get('/about', function () {
    return view('about');
});
/*
Route::get('/articles', function () {
    return view('articles/home');
});

Route::get('/blog', function () {
    return view('blog/home');
});

Route::get('/articles/biographies', function () {
    return view('articles/biographies/home');
});
Route::get('/articles/biographies/kowalewskaya', function () {
    return view('articles/biographies/kowalewskaya');
});
Route::get('/biographies', function () {
    return view('articles/biographies/home');
});
Route::get('/biographies/kowalewskaya', function () {
    return view('articles/biographies/kowalewskaya');
});
Route::get('download/Kowalewskaja', function () {
        return Storage::download('pdf/Kowalewskaja.pdf');
});

Route::get('/projects', function () {
    return view('projects/home');
});

Route::get('/projects/HoughTransform', function () {
    return view('projects/HoughTranform/home');
});
Route::get('/projects/photovoltaic', function () {
    return view('projects/photovoltaic/home');
});
Route::get('/projects/biographies', function () {
    return view('projects/biographies/home');
});

*/

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::fallback(function () {
    
//});
