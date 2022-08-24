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

Route::get('/categories/list',[CategoryController::class,'list'])->middleware(['auth']);
Route::get('/tasks/list',[TaskController::class,'list'])->middleware(['auth']);
Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');;
Route::resource('categories', CategoryController::class)->middleware(['auth']);
Route::resource('tasks', TaskController::class)->middleware(['auth']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
