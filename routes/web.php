<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\AdminController;


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


Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/showdata', [DataController::class, 'showdata'])->name('showdata');
Route::post('/showdata', [DataController::class, 'showdata'])->name('showdata.post');
Route::get('/form/{cpf}', [DataController::class, 'showform'])->name('showform');
Route::post('/form/{cpf}', [DataController::class, 'showform'])->name('showform');
Route::get('/upload', [DataController::class, 'upload'])->name('upload');
Route::post('/uploadfile', [DataController::class, 'uploadfile'])->name('upload.post');
Route::post('/approve/{cpf}', [AdminController::class, 'approve'])->name('approve');
// Route::get('/newreq', [AdminController::class, 'newreq'])->name('newreq');
Route::post('/newreq', [AdminController::class, 'newreq'])->name('newreq');

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/home', [HomeController::class, 'index'])->name('home');

//------------admin related routes---------------------//

Route::get('/do_admin_login', [AuthController::class, 'do_admin_login'])->name('do_admin_login');

Route::group(['middleware' => ['role:admin']], function () {

    //--------------------------------- User Manage---------------------------------
    // Route::get('/user-manage', [ManageUserController::class, 'index'])->name('user-manage');
    

});

Route::group(['middleware' => ['role:user']], function () {

    //--------------------------------- User Dashboard Manage---------------------------------
    // Route::get('user-dashboard', [UserDashboardController::class, 'index'])->name('user-dashboard');
   

});

// Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

