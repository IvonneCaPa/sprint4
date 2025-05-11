<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Gallery;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Gallery $gallery)
    {
        $photos = $gallery->photos()->paginate(10);

        return view('photos.index', compact('gallery', 'photos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Gallery $gallery)
    {
        return view('photos.create', compact('gallery'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Gallery $gallery)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:20',
            'location' => 'required|string|max:255',
            'photo' => 'required|image|max:10240', 
        ]);
       
        $path = $request->file('photo')->store('photos', 'public');

        
        $gallery->photos()->create([
            'title' => $validated['title'],
            'location' => $path, 
        ]);

        return redirect()->route('galleries.photos.index', $gallery)->with('success', 'Foto añadida correctamente.');
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
    public function edit(Gallery $gallery, Photo $photo)
    {
        return view('photos.edit', compact('gallery', 'photo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery, Photo $photo)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|max:10240',
        ]);

        if ($request->hasFile('image')) {
            if ($photo->location) {
                Storage::disk('public')->delete($photo->location);
            }
            
            $path = $request->file('image')->store('photos', 'public');
            $photo->location = $path;
        }

        $photo->title = $validated['title'];
        $photo->save();

        return redirect()->route('galleries.photos.index', $gallery)->with('success', 'Foto actualizada correctamente');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery, Photo $photo)
    {
        // Eliminar la imagen del almacenamiento
        if ($photo->location) {
            Storage::disk('public')->delete($photo->location);
        }

        // Eliminar el registro de la base de datos
        $photo->delete();

        return redirect()->route('galleries.photos.index', $gallery)
            ->with('success', 'Foto eliminada correctamente');
    }

}
