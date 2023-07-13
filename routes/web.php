<?php

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

Route::get('/', function () {
    // return view('welcome');
    return redirect('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







Route::group(['middleware' => 'auth'], function () {


    Route::get('/backoffice/dashboard-admin', [App\Http\Controllers\Backend\DashboardController::class, 'dashboardAdmin'])->middleware(['checkRole:Admin'])->name('be-dashboard-admin');
    Route::get('/backoffice/dashboard-user', [App\Http\Controllers\Backend\DashboardController::class, 'dashboardUser'])->middleware(['checkRole:Pengguna'])->name('be-dashboard-pengguna');





    // Route::get('/backoffice/users', [App\Http\Controllers\Backend\UsersController::class, 'users'])->name('be-users');
    // Route::get('/backoffice/users/add', [App\Http\Controllers\Backend\UsersController::class, 'usersAdd'])->name('be-users-add');
    // Route::post('/backoffice/users/add/data', [App\Http\Controllers\Backend\UsersController::class, 'usersAddData'])->name('be-users-add-data');
    // Route::get('/backoffice/users/edit/{id}', [App\Http\Controllers\Backend\UsersController::class, 'usersEdit'])->name('be-users-edit');
    // Route::post('/backoffice/users/edit/data/{id}', [App\Http\Controllers\Backend\UsersController::class, 'usersEditData'])->name('be-users-edit-data');
    // Route::get('/backoffice/users/delete/data/{id}', [App\Http\Controllers\Backend\UsersController::class, 'usersDelete'])->name('be-users-delete-data');

    // Route::get('/backoffice/blog', [App\Http\Controllers\Backend\BlogController::class, 'blog'])->name('be-blog');
    // Route::get('/backoffice/blog/add', [App\Http\Controllers\Backend\BlogController::class, 'blogAdd'])->name('be-blog-add');
    // Route::post('/backoffice/blog/add/data', [App\Http\Controllers\Backend\BlogController::class, 'blogAddData'])->name('be-blog-add-data');
    // Route::get('/backoffice/blog/edit/{id}', [App\Http\Controllers\Backend\BlogController::class, 'blogEdit'])->name('be-blog-edit');
    // Route::post('/backoffice/blog/edit/data/{id}', [App\Http\Controllers\Backend\BlogController::class, 'blogEditData'])->name('be-blog-edit-data');
    // Route::get('/backoffice/blog/delete/data/{id}', [App\Http\Controllers\Backend\BlogController::class, 'blogDelete'])->name('be-blog-delete');



});
