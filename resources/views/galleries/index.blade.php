@extends('layouts.plantilla')

@section('title', 'Galerias')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-orange-500 text-center mb-6">Listado de galerías</h1>
        
        <div class="flex justify-center mb-6">
            <a href="{{route('galleries.create')}}" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded">
                Crear galería
            </a>
        </div>
        
        <!-- Grid con 2 columnas -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-4xl mx-auto">
            @foreach ($galleries as $gallery)
                <div class="bg-white p-4 rounded shadow hover:shadow-lg transition-shadow">
                    <a href="{{route('galleries.show', $gallery)}}" class="block text-lg font-medium text-gray-700 hover:text-orange-500">
                        {{ $gallery->title }}
                    </a>
                    @if(isset($gallery->description))
                    <p class="text-gray-500 mt-2 line-clamp-2">
                        {{ $gallery->description }}
                    </p>
                    @endif
                    <div class="mt-3 flex justify-between items-center">
                        <span class="text-sm text-gray-400">
                            {{ $gallery->created_at->format('d/m/Y') }}
                        </span>
                        @if(isset($gallery->photos_count))
                        <span class="text-sm text-blue-500">
                            {{ $gallery->photos_count }} fotos
                        </span>
                        @endif
                    </div>
                </div>
            @endforeach        
        </div>

        <div class="mt-8 flex justify-center">
            {{ $galleries->links() }}
        </div>
    </div>
@endsection