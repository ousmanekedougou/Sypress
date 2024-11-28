<?php

use Illuminate\Support\Facades\Route;


Route::prefix('/')->name('utilisateur.')->group(function() 
{
    Route::get('/',[App\Http\Controllers\User\HomeController::class,'index'])->name('index');
    Route::get('/a-propos',[App\Http\Controllers\User\HomeController::class,'about'])->name('about');
    Route::get('/sécurité',[App\Http\Controllers\User\HomeController::class,'security'])->name('security');
    Route::get('/envoronnement',[App\Http\Controllers\User\HomeController::class,'environnement'])->name('environnement');
    Route::get('/transport',[App\Http\Controllers\User\HomeController::class,'transport'])->name('transport');
    Route::get('/négoce',[App\Http\Controllers\User\HomeController::class,'negoce'])->name('negoce');
    Route::get('/contact',[App\Http\Controllers\User\ContactController::class,'index'])->name('contact.index');
    Route::post('/contact',[App\Http\Controllers\User\ContactController::class,'store'])->name('contact.store');
});
