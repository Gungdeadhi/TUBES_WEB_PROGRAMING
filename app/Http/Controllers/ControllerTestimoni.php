<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Storage;

class ControllerTestimoni extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimoni = Testimoni::all();

        return view('postAdmin.viewTesti', compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('postAdmin.addTestimoni');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $request->validate([
            'image_testi.*' =>'required|image'
        ]);

        if ($request->hasFile('image_testi')){
            foreach ($request->file('image_testi') as $image) {
                $imagePath = $image->store('post/testimoni' , 'public');
                Testimoni::create(['image_testi' => $imagePath]);
            }
        }

        return redirect()->route('testimoni.index');
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
        $testimoni = Testimoni::findOrFail($id);
        return view('postAdmin.editTesti', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image_testi'   => 'required|image',
        ]);

        $testimoni = Testimoni::findOrFail($id);

        if ($request->hasFile('image_testi')) {
            Storage::delete('public/' . $testimoni->image_testi);

            $imagePath = $request->file('image_testi')->store('post/testimoni', 'public');
            
            $testimoni->image_testi = $imagePath;
            $testimoni->save();
        }

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimoni = Testimoni::findOrFail($id);
        Storage::delete('public/post/testimoni' . $testimoni->image_testi);

        $testimoni->delete();

        return redirect()->route('testimoni.index');
    }
}
