<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Eliminar Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3>¿Estás seguro que deseas eliminar el producto?</h3>
                    <p>Nombre: {{ $producto->nombre }}</p>
                    <p>Precio: {{ $producto->precio }}</p>
                    <p>Stock: {{ $producto->stock }}</p>
                    
                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                        <a href="{{ route('productos.index') }}"><button type="button">Cancelar</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
