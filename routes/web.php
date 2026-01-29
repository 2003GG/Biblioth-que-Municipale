<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books',[BookController::class ,'index'])->name('Books.index');
Route::get('/addbook',[BookController::class ,'creat'])->name('Books.creat');
Route::post('/store',[BookController::class ,'store'])->name('Books.store');
Route::post('/edit',[BookController::class ,'edit'])->name('Books.edit');
Route::post('/updateBook',[BookController::class ,'update'])->name('Books.update');


