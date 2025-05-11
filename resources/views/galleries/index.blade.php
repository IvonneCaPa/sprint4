@extends('layouts.plantilla')

@section('title', 'Citas')

@section('content')
    <div class="container mx-auto px-4 py-1">
        <h1 class="text-3xl font-bold text-orange-500 text-center mb-6">Listado de galerías</h1>
        <div class="flex justify-center mb-6">
            <a href="{{ route('galleries.create') }}" class="bg-orange-500 hover:bg-orange-400 text-white font-bold py-2 px-4 border-b-4 border-orange-700 hover:border-orange-500 rounded">Crear galería</a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($galleries as $gallery)
                <div class="border border-orange-500 bg-white p-4 rounded shadow hover:shadow-lg transition-shadow">
                    <a href="{{ route('galleries.show', $gallery) }}" class="block text-lg font-medium text-gray-700 hover:text-orange-500">{{ $gallery->title }}</a>
                    <p class="text-gray-500 mt-2 line-clamp-2">{{ $gallery->site }}</p>
                    <p class="text-gray-500 mt-2 line-clamp-2">{{ $gallery->photos->count() }} fotos</p>
                    <p class="text-gray-400 text-sm mt-2">{{ $gallery->date->format('d/m/Y') }}</p>
                    <div class="mt-4 flex space-x-2">
                        <a href="{{ route('galleries.show', $gallery) }}" class="text-blue-500 hover:text-blue-700">Ver</a>
                        <a href="{{ route('galleries.photos.index', $gallery) }}" class="text-green-500 hover:text-green-700">Fotos</a>
                        <a href="{{ route('galleries.edit', $gallery) }}" class="text-yellow-500 hover:text-yellow-700">Editar</a>
                        <form action={{ route('galleries.destroy', $gallery) }} method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 cursor-pointer">Eliminar</button>   
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-8 flex justify-center">
            {{ $galleries->links() }}
        </div>
    </div>
@endsection
