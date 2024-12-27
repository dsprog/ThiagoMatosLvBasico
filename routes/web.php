<?php

use Illuminate\Support\Facades\Route;

Route::view("/", 'site')->name('site');

Route::middleware('auth')->group(function () {
    Route::view('/home', 'welcome')->name('home');
    Route::controller(App\Http\Controllers\UserController::class)->group(function () {
        Route::get('/users', 'index')->name('users.index');
        Route::get('/users/create', 'create')->name('users.create');
        Route::post('/users', 'store')->name('users.store');
        Route::get('/users/{id}', 'show')->name('users.show');
        Route::get('/users/{id}/edit', 'edit')->name('users.edit');
        Route::put('/users/{id}', 'update')->name('users.update');
        Route::post('/users/{id}/perfil', 'perfil')->name('users.perfil');
        Route::post('/users/{id}/interests', 'interests')->name('users.interests');
        Route::post('/users/{id}/roles', 'roles')->name('users.roles');
        Route::delete('/users/{id}', 'destroy')->name('users.destroy');
    });
});
