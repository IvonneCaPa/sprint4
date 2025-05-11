@extends('layouts.plantilla')

@section('title', 'Citas')

@section('content')
    <div class="container mx-auto px-4 py-1">
        <h1 class="text-3xl font-bold text-orange-500 text-center mb-6">Listado de eventos</h1>        
        <div class="flex justify-center mb-6">
            <a href="{{route('quotes.create')}}" class="bg-orange-500 hover:bg-orange-400 text-white font-bold py-2 px-4 border-b-4 border-orange-700 hover:border-orange-500 rounded">Crear evento</a>
        </div>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 max-w-6xl mx-auto">
            @foreach ($quotes as $quote)
                <div class="border border-orange-500 bg-white p-4 rounded shadow hover:shadow-lg transition-shadow">
                    <a href={{route('quotes.show', $quote)}} class="block text-lg font-medium text-gray-700 hover:text-orange-500">
                        {{ $quote->title }}
                    </a>
                    <p class="text-gray-500 mt-2 line-clamp-2">
                        {{ $quote->description }}
                    </p>
                    <p class="text-gray-400 text-sm mt-2">
                        {{ $quote->created_at->format('d/m/Y H:i') }}
                    </p>
                    <div class="mt-4 flex space-x-2">
                        <a href="{{ route('quotes.show', $quote) }}" class="text-blue-500 hover:text-blue-700">Ver</a>
                        <a href="{{ route('quotes.edit', $quote) }}" class="text-yellow-500 hover:text-yellow-700">Editar</a>
                        <form action={{ route('quotes.destroy', $quote) }} method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 cursor-pointer">Eliminar</button>   
                        </form>
                    </div>
                </div>
            @endforeach        
        </div>
        <div class="mt-8 flex justify-center">
            {{ $quotes->links() }}
        </div>
    </div>
@endsection
