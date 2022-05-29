<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
// 	return view('landing');
// });

Route::get('/titip', function () {
	return view('titip');
});

Route::middleware(['auth'])->group(function () {
	Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

	Route::prefix('borrow')->as('borrow.')->group(function () {
		Route::put('/approve/{borrow}', [BorrowController::class, 'approve'])->name('approve');
	});

	Route::resource('admin', AdminController::class);
	Route::resource('member', AnggotaController::class);
	Route::resource('book', BookController::class);
	Route::resource('borrow', BorrowController::class);
});
// Route::get('/test-login', function () {
// 	return view('login');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
// Route::resource('borrow.detail', BorrowController::class)->except([
// 	'create', 'store',
// ]);
