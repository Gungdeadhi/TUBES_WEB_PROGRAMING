<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Images;
use App\Models\ProductsSoldOut;
use App\Models\Testimoni;
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
        $soldOutProducts = ProductsSoldOut::all();
        $testimoni = Testimoni::all();
        
        return view('postUser.viewUser', compact('products', 'soldOutProducts', 'testimoni'));
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
        //
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
            Storage::delete('public/' . $product->images);
            $product->images = $request->file('images')->store('post/images', 'public');
        }

        $product->save();

        if ($request->hasFile('image_path')) {
            
            $oldImages = Images::where('product_id', $product->id)->get();
            foreach ($oldImages as $oldImage) {
                Storage::delete('public/' . $oldImage->image_path);
            }

            Images::where('product_id', $product->id)->delete();

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
        $product = Product::findOrFail($id);

        if ($product) {
            // Pindahkan data ke tabel soldout
            $soldout = new ProductsSoldOut();
            $soldout->merek = $product->merek;
            $soldout->nama = $product->nama;
            $soldout->year = $product->year;
            $soldout->price = $product->price;

            $sourcePath = 'post/images/' . basename($product->images); 
            $newImagePath = 'post/soldout/' . basename($product->images); 
    
            Storage::makeDirectory('public/post/soldout');
            Storage::move($sourcePath, $newImagePath);
            $soldout->image_soldout = $newImagePath;
            
          
            
            $soldout->save();
        }

        // Hapus produk setelah data dipindahkan
        $product->delete();

        return redirect()->route('products.index')->with('produk berhasil dihapus');
    }

}
