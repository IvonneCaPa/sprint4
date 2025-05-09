@extends('layouts.plantilla')

@section('title', 'Citas')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-orange-500 text-center mb-6">Listado de citas</h1>
        
        <div class="flex justify-center mb-6">
            <a href="{{route('quotes.create')}}" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded">
                Crear cita
            </a>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 max-w-6xl mx-auto">
            @foreach ($quotes as $quote)
                <div class="bg-white p-4 rounded shadow hover:shadow-lg transition-shadow">
                    <a href="{{route('quotes.show', $quote)}}" class="block text-lg font-medium text-gray-700 hover:text-orange-500">
                        {{ $quote->title }}
                    </a>
                    <p class="text-gray-500 mt-2 line-clamp-2">
                        {{ $quote->description }}
                    </p>
                    <p class="text-gray-400 text-sm mt-2">
                        {{ $quote->created_at->format('d/m/Y H:i') }}
                    </p>
                </div>
            @endforeach        
        </div>

        <div class="mt-8 flex justify-center">
            {{ $quotes->links() }}
        </div>
    </div>
@endsection
