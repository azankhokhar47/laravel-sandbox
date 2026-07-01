<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
})->name('home');

Route::get('/login',[UserController::class,'loginpage'])->name('login');

Route::post('/login',[UserController::class,'login']);

Route::get('/dashboard',[UserController::class,'dashboardPage'])->name('dashboard');

Route::get('/profile',[UserController::class,'ViewProfile'])->name('profile');

Route::get('/posts',[UserController::class,'ViewPost'])->name('posts');

Route::get('/logout',[UserController::class,'logout'])->name('logout');

