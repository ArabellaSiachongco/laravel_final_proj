<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::middleware('auth')->group(function () {
    // Home route (show products) – now only accessible by authenticated users
    Route::get('/', function () {
        $products = Product::latest()->get();
        return view('welcome', compact('products'));
    });

    // Dashboard route (redirect to home)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Product CRUD routes
    Route::resource('products', ProductController::class);
});

// Authentication routes (not wrapped in auth middleware so users can access them before logging in)
require __DIR__.'/auth.php';
