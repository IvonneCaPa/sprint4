        <header class="overlay flex flex-col">
            <div class="top flex justify-between items-center p-4 text-bg-gray-800">
                <a href="{{ route('home') }}"><img src="{{ asset('images/logo-creart.gif') }}" alt="logo de Creart" class="w-50"></a>
                <nav class="flex justify-center items-center">
                    <ul class="flex space-x-4">
                        <li>
                            <a href="{{ route('home') }}" class="font-bold text-orange-500 text-center mb-6 hover:text-gray-800">Inicio</a>
                        </li>
                        <li>
                            <a href="{{ route('quotes.index') }}" class="font-bold text-orange-500 text-center mb-6 hover:text-gray-800">Ir a los eventos</a>
                        </li>
                        <li>
                            <a href="{{ route('galleries.index') }}" class="font-bold text-orange-500 text-center mb-6 hover:text-gray-800">Ir a las Galerías</a>   
                        </li>
                    </ul>
                </nav>
            </div>
        </header>