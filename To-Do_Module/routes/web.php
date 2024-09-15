<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('todos', [TodoController::class, 'index'])->name('todos.index');
Route::get('todos/create', [TodoController::class, 'create'])->name('todos.create');
Route::post('todos', [TodoController::class, 'store'])->name('todos.store');
Route::get('todos/{todo}/edit', [TodoController::class, 'edit'])->name('todos.edit');
Route::put('todos/{todo}', [TodoController::class, 'update'])->name('todos.update');
Route::delete('todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
Route::put('todos/{todo}/toggleComplete', [TodoController::class, 'toggleComplete'])->name('todos.toggleComplete');
