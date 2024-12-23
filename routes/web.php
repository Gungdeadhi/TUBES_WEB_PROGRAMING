<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

use App\Models\Images;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/productView/{id}', function($id){
    $product = Product::findOrFail($id);
    $images = Images::where('product_id', $id)->get();
    return view('postUser.productView', compact('product', 'images'));
})->middleware(['auth', 'verified'])->name('productView');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});


Route::get('/products/viewUser', [ProductController::class, 'viewUser'])->name('products.viewUser');

Route::resource('/products', ProductController::class)->middleware(['auth', 'verified']);


require __DIR__.'/auth.php';
