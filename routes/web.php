<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\booksController;
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

Route::redirect('/', destination:'login');
Route::post('/logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');
// Route::get('/',[HomeController::class,'homepage']);


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutUs');
    Route::get('/allbooks', [HomeController::class, 'allbooks'])->name('allBooks');
    Route::get('/donate', [HomeController::class, 'donate'])->name('donate');
    Route::get('/booksDetails', [HomeController::class, 'booksDetails'])->name('booksDetails');
    Route::get('/userprofile', [HomeController::class, 'userprofile'])->name('userProfile');
    Route::get('search', [HomeController::class, 'search'])->name('search');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [HomeController::class, 'index'])->name('admin');
    // Route::get('/adminBooks', [HomeController::class, 'adminBooks'])->name('adminBooks');
    // Route::get('/adminEditBooks', [HomeController::class, 'adminEditBooks'])->name('adminEditBooks');
    Route::get('/adminUser', [HomeController::class, 'adminUser'])->name('adminUser');
    Route::get('/adminUserDetails', [HomeController::class, 'adminUserDetails'])->name('adminUserDetails');
    Route::get('/adminAddUser', [HomeController::class, 'adminAddUser'])->name('adminAddUser');
    // Route::match(['post'],'/adminAddBooks', [HomeController::class, 'adminAddBooks'])->name('adminAddBooks');
    Route::post('/insertBooks', [booksController::class, 'insertBooks']);

    //  books record route
    Route::get('adminAddBooks', [booksController::class, 'books'])->name('adminAddBooks');
    Route::get('/store', [booksController::class, 'store'])->name('store');
    Route::post('/add', [booksController::class, 'add']);
    Route::get('delete_record/{id}', [booksController::class, 'delete_record']);
    Route::get('edit_records/{id}', [booksController::class, 'edit_records'])->name('edit_records');
    Route::post('/update/{id}', [booksController::class, 'update'])->name('update');
 
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
