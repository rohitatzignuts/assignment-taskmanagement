<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
use App\Http\Controllers\TaskController;
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

// --all defined routes--
Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
    Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
});

// Auth::routes();
// Route::controller(TaskController::class)->group(function () {
//     Route::get('/new-task', 'create')->name('tasks.create');
//     Route::get('/tasks', 'index')->name('tasks.index');
//     Route::get('/tasks/{task}', 'show')->name('tasks.show');
//     Route::post('/tasks', 'store')->name('tasks.store');
//     Route::delete('/tasks/{task}', 'destroy')->name('tasks.destroy');
//     Route::get('/tasks/{task}/edit', 'edit')->name('tasks.edit');
//     Route::put('/tasks/{task}', 'update')->name('tasks.update');
// })->middleware('auth:login');
