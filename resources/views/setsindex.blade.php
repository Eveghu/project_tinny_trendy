@extends('layouts.app')

@section('title', 'Sets')

@section('content')
<div class="container">
    <h1>SETS EN STOCK</h1>
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
            @foreach ($sets as $set)
            <tr>
                <td>{{ $set->id }}</td>
                <td>{{ $set->name_product }}</td>
                <td>{{ $set->description }}</td>
                <td>{{ $set->color }}</td>
                <td>{{ $set->size }}</td>
                <td>{{ $set->quantity }}</td>
                <td>{{ $set->price }}</td>
                <td>
                    <a href="/sets/{{ $set->id }}" class="btn custom-button">DETALLES</a>
                    <a href="/delete/{{$set->id}}" class="btn custom-button">ELIMINAR</a>
                    <a href="/dresses/{{$set->id}}/editdress" class="btn custom-button">EDITAR</a>
                      
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div style="margin-top: 20px; margin-left: 120px;">
    <a href="{{ route('home') }}" class="btn custom-button">VOLVER AL MENÚ</a>
    <a href="{{ route('sets.create') }}" class="btn custom-button">AGREGAR SET</a>
</div>
@endsection
