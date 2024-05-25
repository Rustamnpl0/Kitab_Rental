<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\contactController;
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
    Route::get('/homepage', [HomeController::class, 'homepage'])->name('homepage');
    // Route::get('/homepage', [HomeController::class, 'homepage'])->name('homepage');
    Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutUs');
    Route::get('/allbooks', [HomeController::class, 'allbooks'])->name('allBooks');
    Route::get('/donate', [HomeController::class, 'donate'])->name('donate');
    Route::get('/booksDetails/{id}', [HomeController::class, 'booksDetails'])->name('booksDetails');
    Route::post('/addCart/{id}', [HomeController::class, 'addCart'])->name('addCart');
    Route::get('/categories/{genre}', [HomeController::class, 'categories'])->name('categories');
    Route::get('deletecart/{id}', [HomeController::class,'deletecart']);
    Route::get('/storeCart', [HomeController::class, 'storeCart'])->name('storeCart');
    Route::get('/userprofile', [HomeController::class, 'userprofile'])->name('userProfile');
    Route::post('addreview/{Books_id}', [HomeController::class, 'addreview'])->name('addreview');
    Route::get('/review', [HomeController::class, 'review'])->name('review');
    Route::get('/reviewform', [HomeController::class, 'reviewform'])->name('reviewform');
    Route::get('/storereview', [HomeController::class, 'storereview']);
    Route::get('search', [HomeController::class, 'search'])->name('search');

    Route::get('/payment-checkout/{cart}',[PaymentController::class,'paymentCheckout'])->name('payment.checkout');
     Route::get('/payment-success/{cart_id}',[PaymentController::class,'success'])->name('payment.success');

});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [HomeController::class, 'index'])->name('admin');
    Route::get('/adminUser', [HomeController::class, 'adminUser'])->name('adminUser');
    Route::get('/adminUserDetails', [HomeController::class, 'adminUserDetails'])->name('adminUserDetails');
    Route::get('/adminAddUser', [HomeController::class, 'adminAddUser'])->name('adminAddUser');
    Route::get('/messagePage', [HomeController::class, 'messagePage'])->name('messagePage');
    // Route::get('/adminDonate', [HomeController::class, 'adminDonate'])->name('adminDonate');
   
    Route::post('/insertBooks', [booksController::class, 'insertBooks']);

    //  books record route
    Route::get('adminAddBooks', [booksController::class, 'books'])->name('adminAddBooks');
    Route::get('/store', [booksController::class, 'store'])->name('store');
    Route::get('/adminreviews', [booksController::class, 'adminreviews'])->name('adminreviews');
    Route::post('/add', [booksController::class, 'add']);
    Route::get('deleteDonation/{id}', [booksController::class, 'deleteDonation']);
    Route::get('delete_record/{id}', [booksController::class, 'delete_record']);
    Route::get('edit_records/{id}', [booksController::class, 'edit_records'])->name('edit_records');
    Route::post('/update/{id}', [booksController::class, 'update'])->name('update');
    Route::get('/adminDonate', [booksController::class, 'adminDonate'])->name('adminDonate');
 
});

Route::post('/create',[DonationController::class,  'create'])->name('create');
Route::post('/store', [DonationController::class ,'store'])->name('store');
Route::get('/show', [DonationController::class ,'show'])->name('show');




Route::post('/createContact',[contactController::class,  'createContact'])->name('createContact');
Route::post('/storeContact', [contactController::class ,'storeContact'])->name('storeContact');
Route::get('/adminContact', [ContactController::class, 'adminContact'])->name('adminContact');
Route::get('/notify', [ContactController::class, 'notify'])->name('notify');


























Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});











require __DIR__.'/auth.php';
