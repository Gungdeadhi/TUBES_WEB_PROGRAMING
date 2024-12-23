<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Images;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        
        return view('postAdmin.indexAdmin', compact('products'));
    }

    public function viewUser(){

        $products = Product::all();
        
        return view('postUser.viewUser', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('PostAdmin.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'merek'         => 'required|string',
            'nama'          => 'required|string',
            'year'          => 'required|integer',
            'price'         => 'required|integer',
            'description'   => 'required|string',
            'images'        => 'required|image',  // Gambar utama
            'image_path'    => 'nullable',
            'image_path.*'  => 'image', // Gambar carousel
        ]);

        $product = new Product();
        $product->merek = $request->merek;
        $product->nama = $request->nama;
        $product->year = $request->year;
        $product->price = $request->price;
        $product->description = $request->description;

        // Menyimpan gambar utama (produk) di kolom images
        if ($request->hasFile('images')) {
            $product->images = $request->file('images')->store('post/images', 'public');
        }

        $product->save();

        // Menyimpan gambar-gambar carousel ke tabel Images
        if ($request->hasFile('image_path')) {
            foreach ($request->file('image_path') as $image) {
                $path = $image->store('post/products', 'public');
                Images::create([
                    'product_id' => $product->id,
                    'image_path' => $path,
                ]);
            }
        }

        return redirect()->route('products.index')->with('produk berhasil ditambahkan');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id); // Ambil produk berdasarkan ID
        return view('viewUserProduct', compact('product')); // Kirim data ke viewUserProduct.blade.php
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $images = Images::where('product_id', $id)->get();
        return view('postAdmin.editProduct', compact('product', 'images'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'merek'         => 'required|string',
            'nama'          => 'required|string',
            'year'          => 'required|integer',
            'price'         => 'required|integer',
            'description'   => 'required|string',
        ]);

        $product = Product::findorFail($id);

        $product->merek = $request->merek;
        $product->nama = $request->nama;
        $product->year = $request->year;
        $product->price = $request->price;
        $product->description = $request->description;

        if ($request->hasFile('images')){
            $product->images = $request->file('images')->store('post/images', 'public');
        }

        $product->save();

        if ($request->hasFile('image_path')) {
            
            Images::where('product_id', $product->id)->delete();

            $oldImages = Images::where('product_id', $product->id)->get();
            foreach ($oldImages as $oldImage) {
                Storage::delete('public/' . $oldImage->image_path);
            }   
            foreach ($request->file('image_path') as $image) {
                $path = $image->store('post/products', 'public');
                Images::create([
                    'product_id' => $product->id,
                    'image_path' => $path,
                ]);
            }
        }
        return redirect()->route('products.index')->with('produk berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findorFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('produk berhasil dihapus');
    }
}
