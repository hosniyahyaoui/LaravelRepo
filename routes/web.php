<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\LockScreen;
use App\Htpp\Controllers\FacebookController;
use App\Htpp\Controllers\GoogleController;
use App\Htpp\Controllers\TwitterController;
use App\Htpp\Controllers\GithubController;
use App\Htpp\Controllers\LinkedinController;
use App\Http\Controllers\LocauxController;
use App\Http\Controllers\AnimauxController;


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

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});

Auth::routes();
//delete animaux
Route::any('/animaux/delete/{id}', [App\Http\Controllers\AnimauxController::class, 'delete']);
Route::any('/admin/animaux/edit/{id}', [App\Http\Controllers\AnimauxController::class, 'edit2']);
Route::any('/admin/animaux/update/{id}', [App\Http\Controllers\AnimauxController::class, 'update2']);
//delete locaux
Route::any('/locaux/delete/{id}', [App\Http\Controllers\LocauxController::class, 'delete']);
Route::any('/admin/locaux/edit/{id}', [App\Http\Controllers\LocauxController::class, 'edit2']);
Route::any('/admin/locaux/update/{id}', [App\Http\Controllers\LocauxController::class, 'update2']);

//locaux
Route::resource('locaux',LocauxController::class);
//Animaux
Route::resource('animaux',AnimauxController::class);
// ----------------------------- home dashboard ------------------------------//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// -----------------------------login----------------------------------------//
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// ----------------------------- lock screen --------------------------------//
Route::get('lock_screen', [App\Http\Controllers\LockScreen::class, 'lockScreen'])->middleware('auth')->name('lock_screen');
Route::post('unlock', [App\Http\Controllers\LockScreen::class, 'unlock'])->name('unlock');

// ------------------------------ register ---------------------------------//
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'storeUser'])->name('register');

// ----------------------------- forget password ----------------------------//
Route::get('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'getEmail'])->name('forget-password');
Route::post('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'postEmail'])->name('forget-password');

// ----------------------------- reset password -----------------------------//
Route::get('reset-password/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'getPassword']);
Route::post('reset-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'updatePassword']);

// ----------------------------- user profile ------------------------------//
Route::get('profile_user', [App\Http\Controllers\UserManagementController::class, 'profile'])->name('profile_user');
Route::post('profile_user/store', [App\Http\Controllers\UserManagementController::class, 'profileStore'])->name('profile_user/store');

// ----------------------------- user userManagement -----------------------//
Route::get('userManagement', [App\Http\Controllers\UserManagementController::class, 'index'])->middleware('auth')->name('userManagement');
Route::get('user/add/new', [App\Http\Controllers\UserManagementController::class, 'addNewUser'])->middleware('auth')->name('user/add/new');
Route::post('user/add/save', [App\Http\Controllers\UserManagementController::class, 'addNewUserSave'])->name('user/add/save');
Route::get('view/detail/{id}', [App\Http\Controllers\UserManagementController::class, 'viewDetail'])->middleware('auth');
Route::post('update', [App\Http\Controllers\UserManagementController::class, 'update'])->name('update');
Route::get('delete_user/{id}', [App\Http\Controllers\UserManagementController::class, 'delete'])->middleware('auth');
Route::get('activity/log', [App\Http\Controllers\UserManagementController::class, 'activityLog'])->middleware('auth')->name('activity/log');
Route::get('activity/login/logout', [App\Http\Controllers\UserManagementController::class, 'activityLogInLogOut'])->middleware('auth')->name('activity/login/logout');

Route::get('change/password', [App\Http\Controllers\UserManagementController::class, 'changePasswordView'])->middleware('auth')->name('change/password');
Route::post('change/password/db', [App\Http\Controllers\UserManagementController::class, 'changePasswordDB'])->name('change/password/db');

// ----------------------------- form staff ------------------------------//
Route::get('form/staff/new', [App\Http\Controllers\FormController::class, 'index'])->middleware('auth')->name('form/staff/new');
Route::post('form/save', [App\Http\Controllers\FormController::class, 'saveRecord'])->name('form/save');
Route::get('form/view/detail', [App\Http\Controllers\FormController::class, 'viewRecord'])->middleware('auth')->name('form/view/detail');
Route::get('form/view/detail/{id}', [App\Http\Controllers\FormController::class, 'viewDetail'])->middleware('auth');
Route::post('form/view/update', [App\Http\Controllers\FormController::class, 'viewUpdate'])->name('form/view/update');
Route::get('delete/{id}', [App\Http\Controllers\FormController::class, 'viewDelete'])->middleware('auth');
//------------------------ Social Login --------------------------------//

Route::get('facebook/login', [App\Http\Controllers\FacebookController::class, 'provider'])->name('facebook.login');
Route::get('facebook/callback', [App\Http\Controllers\FacebookController::class, 'handleCallback'])->name('facebook.callback');


Route::get('google/login', [App\Http\Controllers\GoogleController::class, 'provider'])->name('google.login');
Route::get('google/callback', [App\Http\Controllers\GoogleController::class, 'handleCallback'])->name('google.callback');

Route::get('twitter', [App\Http\Controllers\TwitterController::class, 'handle'])->name('twitter');
Route::get('callback', [App\Http\Controllers\TwitterController::class, 'callbackHandle'])->name('twitter.callback');

Route::get('login/github', [App\Http\Controllers\GithubController::class, 'redirectToProvider'])->name('github.login');
Route::get('login/github/callback', [App\Http\Controllers\GithubController::class, 'handleProviderCallback']);


Route::get('linkedin/login', [App\Http\Controllers\LinkedinController::class, 'provider'])->name('linkedin.login');
Route::get('linkedin/callback', [App\Http\Controllers\LinkedinController::class, 'providerCallback'])->name('linkedin.user');