<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Default home page for all users
Route::get('/', [HomeController::class, 'index']);

// Authenticated users' home page
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'redirect'])->name('home');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

   
   
    
});


Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');


 // Doctor routes
 Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor.index');
 Route::get('/doctor/create', [DoctorController::class, 'create'])->name('doctor.create');
 Route::post('/doctor', [DoctorController::class, 'store'])->name('doctor.store');
 Route::delete('/doctor/{doctor}', [DoctorController::class, 'destroy'])->name('doctor.destroy');


  // Category routes
  Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
  Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
  Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
  Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
  Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');
  Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
  Route::put('/category/{category}', [CategoryController::class, 'update'])->name('category.update');



// Authentication-related routes

require __DIR__ . '/auth.php';
require __DIR__ . '/admin-auth.php';