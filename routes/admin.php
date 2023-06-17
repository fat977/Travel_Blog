<?php

use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\DestinationController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();
Route::prefix('admin')->group(function(){

    Route::get('index',[AdminController::class,'index'])->name('index');
    Route::post('login',[AdminController::class,'login'])->name('login');

    Route::group(['middleware'=>['auth:admin']],function(){

        // Admin
        Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
        Route::match(['get', 'post'], 'update-password',[AdminController::class,'updatePassword'])->name('update.password');
        Route::post('check-current-password',[AdminController::class,'checkCurrentPassword']);

        Route::match(['get', 'post'], 'update-details',[AdminController::class,'updateDetails'])->name('update.details');
        Route::get('logout',[AdminController::class,'logout'])->name('logout');

        /*Route::get('forgot-password-view',[AdminController::class,'forgotPasswordView']);
        Route::post('forgot-password',[AdminController::class,'forgotPassword']); */

        //users
        Route::get('users',[UserController::class,'index'])->name('user.index');
        Route::post('delete/users',[UserController::class,'destroy'])->name('user.destroy');

        //settings
        Route::get('/settings', [SettingController::class, 'index'])->name('settings');
        Route::post('/settings/update/{setting}', [SettingController::class, 'update'])->name('settings.update');


        Route::resources([
            'destination' => DestinationController::class,
            'post' => PostController::class,
        ]);
    });
});