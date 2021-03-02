<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/posts/{post}', 'PostsController@show');  -- old
Route::get('/posts/{post}', [App\Http\Controllers\PostsController::class, 'show']);

/*
Route::get('/posts/{post}', function($post){
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post!',
        'my-second-post' => 'Now I am getting the hang of this blogging thing'
    ];

    if(! array_key_exists($post, $posts)){
        abort(404,'Sorry, that post was not found.');
    }

    return view('test',[
        'post' => $posts[$post]
    ]);

    /*
    return view('test',[
        'post' => $posts[$post] ?? 'Nothing here yet.'
    ]);
    */
/*    
});

*/

/*

Route::get('/posts/{post}', function(){
    return view('test');
});

/*

Route::get('/', function(){
    $name = request('name');
    return view('test', [
        'name'=> $name
    ]);
});

/*

Route::get('/', function(){
    $name = request('name');
    return $name;
});

/*
Route::get('test',function(){
    return view('test');
});
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

/*
Route::get('/hello', function () {
    return 'Hello';
});

Route::get('/array', function () {
    return ['Hello' => 'world'];
});
*/