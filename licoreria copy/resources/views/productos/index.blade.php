<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div
                        class="table-responsive"
                    >
                        <table
                            class="table table-primary"
                        >
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">nombre</th>
                                    <th scope="col">precio</th>
                                    <th scope="col">stock</th>
                                    <th scope="col">acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $producto)
                                <tr class="">
                                    <td scope="row">{{$producto->id}}</td>
                                    <td>{{$producto->nombre}}</td>
                                    <td>{{$producto->precio}}</td>
                                    <td>{{$producto->stock}}</td>
                                    <td>
                                        <button>Comprar</button>
                                        <a href="{{ route('productos.edit', $producto->id) }}">
                                            <button type="button">editar</button>
                                        </a>
                                        <form action="{{ route('eliminar-producto', $producto->id) }}" method="GET" style="display:inline;">
                                            @csrf
                                            <button type="submit">eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('agregar-producto') }}">
                            <button>Agregar Producto</button>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>