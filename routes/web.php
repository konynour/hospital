<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/departments',action:[DepartmentController::class,'index'])->name('departments.index');
// Route::get('/departments/create',action:[DepartmentController::class,'create']);
// Route::post('/departments/store',action:[DepartmentController::class,'store']);
// Route::post('/departments/show',action:[DepartmentController::class,'show']);
// Route::get('/departments/edit',action:[DepartmentController::class,'edit']);
// Route::patch('/departments/update',action:[DepartmentController::class,'update']);
// Route::patch('/departments/destory',action:[DepartmentController::class,'destory']);
// route::resource(name: '/derpatment',DepartmentController::class);
Route::resource('departments',DepartmentController::class);