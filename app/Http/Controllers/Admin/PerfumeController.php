<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Perfume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PerfumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Perfume::query();
    
        if ($request->has('search')) {
            $search = $request->input('search');
            $query  ->where('name', 'LIKE', "%$search%")
                    ->orWhere('brand', 'LIKE', "%$search%");
        }
    
        $perfumes = $query->get();
    
        return view('admin.index', compact('perfumes'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:1024',
        ]);

        $perfume = new Perfume();
        $perfume->name = $request->name;
        $perfume->brand = $request->brand;
        $perfume->price = $request->price;
        $perfume->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('perfumes', 'public');
            $perfume->image = $imagePath;
        }

        // dd($imagePath);

        $perfume->save();

        return redirect()->route('admin.perfumes.index')->with('success', 'Profumo creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $perfume = Perfume::findOrFail($id);
        return view('admin.show', compact('perfume'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $perfume = Perfume::findOrFail($id);
        return view('admin.edit', compact('perfume'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:1024',
        ]);

        $perfume = Perfume::findOrFail($id);
        $perfume->name = $request->name;
        $perfume->brand = $request->brand;
        $perfume->price = $request->price;
        $perfume->description = $request->description;

        if ($request->hasFile('image')) {
            if ($perfume->image) {
                Storage::disk('public')->delete($perfume->image);
            }
            $imagePath = $request->file('image')->store('perfumes', 'public');
            $perfume->image = $imagePath;
        }

        $perfume->save();

        return redirect()->route('admin.perfumes.index')->with('success', 'Profumo aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $perfume = Perfume::findOrFail($id);

        if ($perfume->image) {
            Storage::disk('public')->delete($perfume->image);
        }

        $perfume->delete();

        return redirect()->route('admin.perfumes.index')->with('success', 'Profumo eliminato con successo!');
    }
}
