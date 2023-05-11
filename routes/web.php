<?php

use Illuminate\Database\Schema\IndexDefinition;
use Illuminate\Http\Request;
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

/*Route::get('/', function () {
    return view('welcome');
}); */

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//necessary(?) line for using resource method controller
//Route::resource('blog', App\Http\Controllers\PRController::class);

// //GET request
// Route::get('/blog', [App\Http\Controllers\PostsController::class, 'index'])->name('blog'); //testing yay, 1st method
// Route::get('/blog/1', [App\Http\Controllers\PostsController::class, 'show'])->name('blog'); //accessing one specific pos where your id is 1, wont be visible in index method but in show method

// //POST
// Route::get('/blog/create', [App\Http\Controllers\PostsController::class, 'create'])->name('blog');//will visible in create method in controller
// Route::post('/blog', [App\Http\Controllers\PostsController::class, 'store'])->name('blog');//when user submitted the form, inside store method inside database

// //PUT OR PATCH
// Route::get('/blog/edit/1', [App\Http\Controllers\PostsController::class, 'edit'])->name('blog');//visible in specific id of 1 in edit method (controller)
// Route::patch('/blog/1', [App\Http\Controllers\PostsController::class, 'update'])->name('blog');

// //DELETE
// Route::delete('/blog/1', [App\Http\Controllers\PostsController::class, 'destroy'])->name('blog');//deleting specific id of 1

//all above are handled in resource method of controller
//Route::resource('blog', App\Http\Controllers\PRController::class);

//Multiple HTTP verbs
// Route::match(['GET', 'POST'], '/blog',[App\Http\Controllers\PRController::class, 'index']);
// Route::any('/blog',[App\Http\Controllers\PRController::class, 'index']);

//Return view only
// Route::view('/blog', 'blog.index', ['name' => 'Testing']);

//this if a route for invoke method

// Route::get('/', App\Http\Controllers\HController::class);

/*
    GET - Request a resource
    POST - Create a new resource
    PUT - Update a resource
    PATCH - Modify a resource (modify value that is already changed)
    DELETE - Delete a resource
    OPTIONS - Ask the server which verbs are allowed
*/

//Variable Route

//GET request
Route::get('/blog', [App\Http\Controllers\PRController::class, 'index'])->name('blog'); //
Route::get('/blog/{id}', [App\Http\Controllers\PRController::class, 'show'])->name('blog'); //curly braces for variables

//POST
Route::get('/blog/create', [App\Http\Controllers\PRController::class, 'create'])->name('blog');//will visible in create method in controller
Route::post('/blog', [App\Http\Controllers\PRController::class, 'store'])->name('blog');//when user submitted the form, inside store method inside database

//PUT OR PATCH
Route::get('/blog/edit/{id}', [App\Http\Controllers\PRController::class, 'edit'])->name('blog');//visible in specific id of 1 in edit method (controller)
Route::patch('/blog/{id}', [App\Http\Controllers\PRController::class, 'update'])->name('blog');

//DELETE
Route::delete('/blog/{id}', [App\Http\Controllers\PRController::class, 'destroy'])->name('blog');//deleting specific id of 1

//all above are handled in resource method of controller
Route::resource('blog', App\Http\Controllers\PRController::class);

//Multiple HTTP verbs
Route::match(['GET', 'POST'], '/blog',[App\Http\Controllers\PRController::class, 'index']);
Route::any('/blog',[App\Http\Controllers\PRController::class, 'index']);
