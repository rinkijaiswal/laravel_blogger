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

Route::get('/{id}', function ($id) {
    $blogs = App\Models\Category::find($id)->blog;
    return view('welcome',compact('blogs'));
    //$blogs = App\Models\Blog::find($id)->category;
    // dd($blogs);
});

use App\Http\Controllers\BlogController;

// Route::get('/', function(){
//     return view('welcome');
// });

Route::match(['get','post'],'/blog/create',[BlogController::class,'createBlog']);
Route::get('/blog/view',[BlogController::class,'view']);
Route::match(['get','post'],'/blog/update/{id}',[BlogController::class,'update']);
Route::get('/blog/delete/{id}',[BlogController::class,'delete']);

Route::match(['get','post'],'/category/create',[App\Http\Controllers\CategoryController::class,'create']);

// agr page not found hai to
// Route::fallback(function(){
//     return "hello";
// });
