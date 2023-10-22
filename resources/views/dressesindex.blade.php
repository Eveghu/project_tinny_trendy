@extends('layouts.app')

@section('title', 'Dresses')

@section('content')
<div class="container">
    <h1>VESTIDOS EN STOCK</h1>
    <style>
      .custom-button {
        font-size: 14px; /* Reduce el tamaño de la fuente */
        background-color: #e7d8df; /* Cambia el color de fondo a tu elección */
        color: #fff; /* Cambia el color del texto a blanco */
        border: none;
        padding: 5px 10px; /* Añade un espacio interno al botón */
        border-radius: 5px; /* Añade bordes redondeados */
        transition: background-color 0.3s; /* Agrega una transición al color de fondo */
    
        /* Estilo al pasar el mouse por encima (hover) */
        &:hover {
            background-color: #ff8bb4; /* Cambia el color de fondo al pasar el mouse */
        }
    }
    </style>
    <table class="table" style="margin-top: 50px;"> <!-- Agregamos un margen superior -->
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Producto</th>
                <th>Descripción</th>
                <th>Color</th>
                <th>Talla</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dresses as $dress)
            <tr>
                <td>{{ $dress->id }}</td>
                <td>{{ $dress->name_product }}</td>
                <td>{{ $dress->description }}</td>
                <td>{{ $dress->color }}</td>
                <td>{{ $dress->size }}</td>
                <td>{{ $dress->amount }}</td>
                <td>{{ $dress->price }}</td>
                <td>
                    <a href="/dresses/{{ $dress->id }}" class="btn custom-button">DETALLES</a>
                    <a href="/dresses/{{$dress->id}}/editdress" class="btn custom-button">EDITAR</a>
                      
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div style="margin-top: 20px; margin-left: 120px;">
    <a href="{{ route('home') }}" class="btn custom-button">VOLVER AL MENÚ</a>
    <a href="{{ route('dresses.create') }}" class="btn custom-button">AGREGAR VESTIDO</a>
</div>
@endsection
