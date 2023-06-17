<?php

use App\Events\NewPostEvent;
use App\Events\UserRegisterEvent;
use App\Http\Controllers\Website\BloggerController;
use App\Http\Controllers\Website\ContactController;
use App\Http\Controllers\Website\DestinationController;
use App\Http\Controllers\Website\IndexController;
use App\Http\Controllers\Website\PostController;
use App\Http\Controllers\Website\UserController;
use App\Models\Destination;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/* Route::get('test', function () {
    event(new NewPostEvent('Someone'));
    return "Event has been sent!";
}); */


Route::get('/',[IndexController::class,'index'])->name('website');

Route::get('/contact',[ContactController::class,'index'])->name('contact');

Route::get('/destinations/{destination}', [DestinationController::class, 'show'])->name('destination');

Route::get('/post/{post}', [PostController::class, 'show'])->name('post');

//user login/ register
Route::prefix('user')->group(function(){
    Route::get('register/login',[UserController::class,'register_login'])->name('user.register.login');

    Route::post('login',[UserController::class,'userLogin'])->name('user.login');
    Route::post('register',[UserController::class,'userRegister'])->name('user.register');
});

//blogger login/ register
Route::prefix('blogger')->group(function(){
    Route::get('register/login',[BloggerController::class,'register_login'])->name('blogger.register.login');

    Route::post('login',[BloggerController::class,'bloggerLogin'])->name('blogger.login');
    Route::post('register',[BloggerController::class,'bloggerRegister'])->name('blogger.register');

     // confirm blogger
     Route::get('confirm/{code}',[BloggerController::class,'bloggerConfirm']);
});

 //user forgot password
/* Route::match(['get','post'],'user/forgot-password',[UserController::class,'forgotPassword']);

Route::group(['middleware'=>['auth']],function(){
    //user account
    Route::match(['get','post'],'user/account',[UserController::class,'userAccount']);
    // update password
    Route::post('user/update-password',[UserController::class,'userUpdatePassword']);

    Route::post('user/check-current-password',[UserController::class,'checkCurrentPassword']);

    Route::get('user/change-password',[UserController::class,'changePassword']);
    Route::post('user/create-new-password',[UserController::class,'createNewPassword']);
});

// user logout
Route::get('user/logout',[UserController::class,'userLogout']);

// confirm user
Route::get('user/confirm/{code}',[UserController::class,'userConfirm']);

 */