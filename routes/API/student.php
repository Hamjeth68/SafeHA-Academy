<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::post('student/login', [LoginController::class, 'studentLogin'])->name('studentLogin');
Route::group(['prefix' => 'student', 'middleware' => ['auth:student-api', 'scopes:student']], function () {
    // authenticated staff routes here 
    Route::get('/home-two', [LoginController::class, 'home2']);
});
