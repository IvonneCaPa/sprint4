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
        
        <ul class="max-w-md mx-auto space-y-2">
            @foreach ($quotes as $quote)
                <li class="bg-white p-3 rounded shadow hover:shadow-md transition-shadow">
                    <a href="{{route('quotes.show', $quote)}}" class="text-gray-700 hover:text-orange-500">
                        {{ $quote->title }}
                    </a>
                    <p class="text-gray-500 mt-1">
                        {{ $quote->description }}
                    </p>
                    <p class="text-gray-400 mt-1">
                        {{ $quote->created_at->format('d/m/Y H:i') }}
                </li>
            @endforeach        
        </ul>

        <div class="mt-6 flex justify-center">
            {{ $quotes->links() }}
        </div>
    </div>
@endsection

