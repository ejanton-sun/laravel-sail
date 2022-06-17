<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserSettingsController;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    Route::get('/mailable', function () {
        return new VerifyEmail();
    });

Route::group(['middleware' => 'guest'], function () {
    Route::view('/', 'welcome');

    Route::get('/sign-in', [LoginController::class, 'index'])->name('signin.index');
    Route::post('/sign-in', [LoginController::class, 'post'])->name('signin.store');

    Route::get('/sign-in/github', [LoginController::class, 'github'])->name('signin.github');
    Route::get('/sign-in/github/redirect', [LoginController::class, 'githubRedirect']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('/signout', [LoginController::class, 'signout'])->name('signout');
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::post('/home', [PostController::class, 'store'])->name('post.store');

    Route::get('/{post}', [PostController::class, 'show'])->name('post.show');
    Route::post('/{post}', [CommentController::class, 'store'])->name('comment.store');
    Route::post('/{post}/{comment}', [CommentController::class, 'storeReply'])->name('comment.store.reply');


    Route::get('/{user}/profile', [UserController::class, 'index'])->name('profile');
    Route::get('/{user}/settings', [UserSettingsController::class, 'index'])->name('settings');
    Route::get('/{user}/settings/details', [UserSettingsController::class, 'details'])->name('settings.details.show');
    Route::put('/{user}/settings/details', [UserSettingsController::class, 'updateDetails'])->name('settings.details.update');
    Route::get('/{user}/settings/password', [UserSettingsController::class, 'password'])->name('settings.password.show');
    Route::post('/{user}/settings/password', [UserSettingsController::class, 'updatePassword'])->name('settings.password.update');

    Route::get('/{post}/{comment}', [CommentController::class, 'index'])->name('comment.index');


});
