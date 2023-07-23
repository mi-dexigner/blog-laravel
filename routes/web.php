<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

*/

Route::get('/',[HomeController::class,'homepage'])->name("homepage");
Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name("home");
Route::get('/post_details/{id}',[HomeController::class,'post_details']);

Route::get('post',[HomeController::class,'post'])->middleware(['auth','admin'])->name('post');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/post_page',[AdminController::class,'post_page'])->middleware(['auth','admin'])->name('post_page');
Route::post('/add_post',[AdminController::class,'add_post'])->middleware(['auth','admin']);
Route::get('/show_post',[AdminController::class,'show_post'])->middleware(['auth','admin'])->name('show_post');
Route::get('/post_delete/{id}',[AdminController::class,'post_delete'])->middleware(['auth','admin']);
Route::get('/post_edit/{id}',[AdminController::class,'post_edit'])->middleware(['auth','admin']);
Route::post('/update_post/{id}',[AdminController::class,'update_post'])->middleware(['auth','admin']);


require __DIR__.'/auth.php';
