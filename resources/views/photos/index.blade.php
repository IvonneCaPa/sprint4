@extends('layouts.plantilla')

@section('title', 'Fotos')

@section('content')

    <div class="container mx-auto px-4 py-1"> 
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        <h1 class="text-3xl font-bold text-orange-500 text-center mb-6">Fotos de la Galería: {{ $gallery->title }}</h1>
        <div>
            <a href="{{ route('galleries.photos.create', $gallery) }}" class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-yellow-300">Agregar Foto</a>
            <a href="{{ route('galleries.index') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-medium py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-yellow-300">Volver</a>
        </div>      
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                        @forelse ($photos as $photo)
                            <div class="border rounded-lg overflow-hidden shadow-lg">
                                <img src="{{ asset('storage/' . $photo->location) }}" alt="{{ $photo->title }}" class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold">{{ $photo->title }}</h3>                                    
                                    <div class="mt-4 flex space-x-2">
                                        <a href="{{ route('galleries.photos.edit', [$gallery, $photo]) }}" class="text-yellow-500 hover:text-yellow-700">Editar</a>
                                        <form action="{{ route('galleries.photos.destroy', [$gallery, $photo]) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700">Eliminar</button>   
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-4 text-center py-4">
                                <p class="text-gray-500">No hay fotos disponibles en esta galería.</p>
                            </div>
                        @endforelse
                    </div>
                    <div class="mt-6">
                        {{ $photos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection