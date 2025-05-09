<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $galleries = Gallery::latest()->paginate(10);
        return view('galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:20',
            'date' => 'required|date',
            'site' => 'required|string|max:45',
        ]);
        Gallery::create($validated);
        return redirect()->route('galleries.index')->with('success', 'Galeria creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        return view('galleries.show', compact('gallery'));
    }
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('galleries.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:20',
            'date' => 'required|date',
            'site' => 'required|string|max:45',
        ]);
        $gallery->update($validated);
        return redirect()->route('galleries.index')->with('success', 'Galeria actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        
        return redirect()->route('galleries.index')->with('success', 'Galeria eliminada correctamente.');
    }
}
