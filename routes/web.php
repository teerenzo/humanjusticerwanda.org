<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ContactController;

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
    return view('landing');
})->name('landing');

//login route

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');


//

//register route

Route::get('/register', [SignUpController::class, 'index'])->name('register');
Route::post('/register', [SignUpController::class, 'register']);
// verify email
Route::get('/verify-email/{token}', [SignUpController::class, 'verifyEmail'])->name('verifyEmail');

//dashboard route

Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
})->name('dashboard');


Route::get('/admin/login', [AdminController::class, 'index'])->name('admin.login');

Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');

//logout route

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// testimonies route

Route::get('/testimonies',[TestimonyController::class, 'index'])->name('testimonies');
Route::get('/addTestimony',[TestimonyController::class, 'addTestimony'])->name('addTestimony');
Route::post('/addTestimony',[TestimonyController::class, 'storeTestimony'])->name('addTestimony');


//services route

Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/request', [ServiceController::class, 'requestService'])->name('requestService');
Route::post('/services/request', [ServiceController::class, 'storeService'])->name('requestService');

Route::get('/services/accept/{id}', [ServiceController::class, 'acceptService'])->name('acceptService');
Route::get('/services/reject/{id}', [ServiceController::class, 'rejectService'])->name('rejectService');


// document route

Route::get('/documents/manage', [DocumentController::class, 'index'])->name('documents');

Route::get('/documents/add', [DocumentController::class, 'addDocument'])->name('addDocument');

Route::post('/documents/add', [DocumentController::class, 'storeDocument'])->name('storeDocument');

Route::get('/documents/download/{document}', [DocumentController::class, 'downloadDocument'])->name('downloadDocument');

Route::get('/documents/delete/{id}', [DocumentController::class, 'deleteDocument'])->name('deleteDocument');




// about route

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// contact route

Route::get('/contact', [ContactController::class,'index'])->name('contact');

Route::post('/contact', [ContactController::class,'storeContact'])->name('contact');

Route::get('/comments', [ContactController::class,'manageContact'])->name('manageContact');





// services route

Route::get('/our-services', function () {
    return view('pages.services');
});







