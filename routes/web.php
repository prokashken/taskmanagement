<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return view('welcome');
});

//  Route::get('/categories',[CategoryController::class,'index']);
//  Route::get('/categories/create',[CategoryController::class,'create'])->middleware('auth');
//  Route::post('/categories',[CategoryController::class,'store'])->middleware('auth');
// Route::get('/categories/{id}/edit',[CategoryController::class,'edit'])->middleware('auth');
// Route::put('/categories/{id}',[CategoryController::class,'update'])->middleware('auth');
// Route::delete('/categories/{id}',[CategoryController::class,'destroy'])->middleware('auth');
// Route::resource('/categories',CategoryController::class)->except(['show'])->middleware(['auth']);
//  Route::post('/categories/store',[CategoryController::class,'store']);
Route::get('/categories/list',[CategoryController::class,'list']);
Route::get('/tasks/list',[TaskController::class,'list']);
Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');;
Route::resource('categories', CategoryController::class);
Route::resource('tasks', TaskController::class);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
