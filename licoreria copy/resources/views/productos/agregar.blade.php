@extends('dashboard')
@section('content')
<form action="{{ route('productos.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input
            type="text"
            class="form-control"
            name="nombre"
            id="nombre"
            aria-describedby="nombreHelp"
            placeholder="Ingrese el nombre del producto"
            required
        /> <br>
        <small id="nombreHelp" class="form-text text-muted">Nombre del producto</small>
    </div>
    
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input
            type="number"
            step="0.01"
            class="form-control"
            name="precio"
            id="precio"
            aria-describedby="precioHelp"
            placeholder="Ingrese el precio del producto"
            required
        /> <br>
        <small id="precioHelp" class="form-text text-muted">Precio del producto en dólares</small>
    </div>
    
    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input
            type="number"
            class="form-control"
            name="stock"
            id="stock"
            aria-describedby="stockHelp"
            placeholder="Ingrese la cantidad en stock"
            required
        /> <br>
        <small id="stockHelp" class="form-text text-muted">Cantidad disponible en inventario</small>
    </div>
    
    <button type="submit" class="btn btn-primary">Agregar Producto</button>
</form>

    
@endsection