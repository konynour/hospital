<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/departments',[DepartmentController::class,'index'])->name('departments.index');
Route::get('/departments/create',[DepartmentController::class,'create'])->name('departments.create');
Route::post('/departments/store',[DepartmentController::class,'store'])->name('departments.store');
Route::post('/departments/show',[DepartmentController::class,'show'])->name('departments.show');
Route::get('/departments/edit',[DepartmentController::class,'edit'])->name('departments.edit');
Route::patch('/departments/update',[DepartmentController::class,'update'])->name('departments.update');
Route::patch('/departments/destory',[DepartmentController::class,'destory'])->name('departments.destory');
// route::resource(name: '/derpatment',DepartmentController::class);
// Route::resource('departments',DepartmentController::class);

