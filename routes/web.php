<?php

use App\Http\Controllers\bibliothecaireController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books',[BookController::class ,'index'])->name('Books.index');
Route::get('/addbook',[BookController::class ,'creat'])->name('Books.creat');
Route::post('/store',[BookController::class ,'store'])->name('Books.store');
Route::get('/{book}/edit',[BookController::class ,'edit'])->name('Books.edit');
Route::put('/{book}/updateBook',[BookController::class ,'update'])->name('Books.update');
Route::delete('/{book}/destroyeBook',[BookController::class ,'destroy'])->name('Books.destroy');
Route::get('/members',[bibliothecaireController::class,'index'])->name('members.index');
Route::delete('/{user}/destroyeUser',[bibliothecaireController::class,'destroy'])->name('member.destroy');
Route::post('/{name}/{email}/store',[bibliothecaireController::class,'store'])->name('member.store');






