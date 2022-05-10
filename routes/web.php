<?php

use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/',[StudentController::class,'index'])->name('index');
Route::post('/',[StudentController::class,'create'])->name('create');

Route::get('/edit/{id}',[StudentController::class,'edit'])->name('edit');
Route::put('/edit/{id}',[StudentController::class,'update'])->name('update');

Route::get('/delete/{id}',[StudentController::class,'destroy'])->name('destroy');


Route::get('/upload',[FileUploadController::class,'show']);
Route::post('/upload',[FileUploadController::class,'upload']);