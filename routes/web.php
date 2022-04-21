<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('about', [AboutController::class, 'index'])->name('about.index');
Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');

Route::post('logout', [LogoutController::class, 'store'])->name('logout');

Route::get('login', [LoginController::class, 'index'])->name('auth.login');
Route::post('login', [LoginController::class, 'store']);

Route::get('register', [RegisterController::class, 'index'])->name('auth.register');
Route::post('register', [RegisterController::class, 'store']);

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('contact/show', [ContactController::class, 'show'])->name('contact.show')->middleware('auth');
Route::get('contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit')->middleware('auth');
Route::patch('contact/{id}/update', [ContactController::class, 'update'])->name('update')->middleware('auth');
Route::delete('contact/{id}/delete', [ContactController::class, 'destroy'])->name('contact.delete')->middleware('auth');
