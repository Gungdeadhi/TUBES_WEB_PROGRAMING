<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
            'brand'         => 'required|string',
            'model'         => 'required|string',
            'year'          => 'required|integer',
            'price'         => 'required|integer',
            'description'   => 'required|string',
            'images'        => 'required|image',
        ]);

        $product = new Product();
        $product->brand = $request->brand;
        $product->model = $request->model;
        $product->year = $request->year;
        $product->price = $request->price;
        $product->description = $request->description;

        if ($request->hasFile('images')){
            $product->images = $request->file('images')->store('post/images', 'public');
        }

        $product->save();

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
        $product = Product::findorFail($id);

        return view('postAdmin.editProduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'brand'         => 'required|string',
            'model'         => 'required|string',
            'year'          => 'required|integer',
            'price'         => 'required|integer',
            'description'   => 'required|string',
        ]);

        $product = Product::findorFail($id);

        $product->brand = $request->brand;
        $product->model = $request->model;
        $product->year = $request->year;
        $product->price = $request->price;
        $product->description = $request->description;

        if ($request->hasFile('images')){
            $product->images = $request->file('images')->store('post/images', 'public');
        }

        $product->save();
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
