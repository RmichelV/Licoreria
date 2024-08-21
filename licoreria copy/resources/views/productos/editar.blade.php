<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}">
                        </div>
                        <div>
                            <label for="precio">Precio:</label>
                            <input type="text" name="precio" id="precio" value="{{ $producto->precio }}">
                        </div>
                        <div>
                            <label for="stock">Stock:</label>
                            <input type="text" name="stock" id="stock" value="{{ $producto->stock }}">
                        </div>

                        <button type="submit">Guardar Cambios</button>
                        <a href="{{ route('productos.index') }}"><button type="button">Cancelar</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
