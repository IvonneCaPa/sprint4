@extends('layouts.plantilla')

@section('title', 'Editar Galeria')

@section('content')
    <div class="container mx-auto px-4 py-1">
        <h1 class="text-3xl font-bold text-orange-500 text-center mb-6">Editar Galeria</h1>        
        <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
            <form action="{{ route('galleries.update', $gallery) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">
                        Nombre de la galeria:
                        <input type="text" name="name" value="{{ old('title', $gallery->title) }}" 
                        class="mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-orange-500 focus:ring focus:ring-orange-200 py-2 px-3 shadow-sm transition duration-150 ease-in-out">
                    </label>
                    @error('name')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror                    
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">
                        Fecha:
                        <input type="date" name="date" value="{{ old('date', $gallery->date) }}"
                        class="mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-orange-500 focus:ring focus:ring-orange-200 py-2 px-3 shadow-sm transition duration-150 ease-in-out">
                    </label>
                    @error('date')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">
                        Lugar:
                        <input type="text" name="site" value="{{ old('site', $gallery->site) }}"
                        class="mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-orange-500 focus:ring focus:ring-orange-200 py-2 px-3 shadow-sm transition duration-150 ease-in-out">
                    </label>
                    @error('site')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </form>
            <div class="mb-4">
                <a href={{ route('galleries.photos.index', $gallery) }} class="bg-orange-500 hover:bg-orange-600 text-white font-medium py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-yellow-300 mx-auto block text-center">Agregar/eliminar fotos</a>
            </div>
            <div class="flex justify-between">
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
                    Actualizar Galería
                </button>
                <a href="{{ route('galleries.show', $gallery) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-medium py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-yellow-300">Volver</a>


            </div>     
        </div>            

    </div>

@endsection