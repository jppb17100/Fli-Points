<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company\CompanyController;

Route::get('/', function(){
    return  view('welcome');
});

Route::prefix('/company')->group(function(){

    Route::get('/', [\App\Http\Controllers\Company\CompanyController::class, 'index']);
    Route::get('/create', [\App\Http\Controllers\Company\CompanyController::class, 'create']); // ->name('')
    Route::post('/create', [\App\Http\Controllers\Company\CompanyController::class, 'create']);
    
    //Route::get('/store', [\App\Http\Controllers\Company\CompanyController::class, 'store']);
    //Route::post('/store', [\App\Http\Controllers\Company\CompanyController::class, 'store']);

    //Route::get('/show', [\App\Http\Controllers\Company\CompanyController::class, 'show']);
    Route::get('/edit/{id}', [\App\Http\Controllers\Company\CompanyController::class, 'edit']);
    Route::post('/edit/{id}', [\App\Http\Controllers\Company\CompanyController::class, 'edit']);
    
    //Route::get('/update', [\App\Http\Controllers\Company\CompanyController::class, 'update']);
    Route::get('/destroy/{id}', [\App\Http\Controllers\Company\CompanyController::class, 'destroy']);


});

//Route::resource('company', \App\Http\Controllers\Company\CompanyController::class);
