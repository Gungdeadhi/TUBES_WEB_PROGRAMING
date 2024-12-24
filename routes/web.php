<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ControllerTestimoni;
use App\Models\Product;
use App\Models\Images;
use App\Models\Testimoni;
use App\Models\ProductsSoldOut;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');

Route::get('/dashboard', function () {
    $total = count(Product::all());
    return view('dashboard', compact('total'));   
})->middleware('isAdmin')->name('dashboard');


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

Route::resource('/testimoni', ControllerTestimoni::class)->middleware(['auth', 'verified'])->middleware('isAdmin');

Route::resource('/products', ProductController::class)->middleware(['auth', 'verified'])->middleware('isAdmin');


require __DIR__.'/auth.php';
