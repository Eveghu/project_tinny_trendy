@extends('layouts.app')
@section('title', 'Blouses')
@section('content')
<div class="container">
    <h1>BLUSAS EN STOCK</h1>
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
            @foreach ($blouses as $blouse)
            <tr>
                <td>{{ $blouse->id }}</td>
                <td>{{ $blouse->name_product }}</td>
                <td>{{ $blouse->description }}</td>
                <td>{{ $blouse->color }}</td>
                <td>{{ $blouse->size }}</td>
                <td>{{ $blouse->quantity }}</td>
                <td>{{ $blouse->price }}</td>
                <td>
                  <a href="/blouses/{{ $blouse->id }}" class="btn custom-button">DETALLES</a>  
                  <a href="/delete/{{$blouse->id}}" class="btn custom-button">ELIMINAR</a>              
                  <a href="/blouses/{{$blouse->id}}/editblouse" class="btn custom-button">EDITAR</a>
                    
                </td>
            </tr>
           
            @endforeach
        </tbody>
    </table>
</div>
<div style="margin-top: 20px; margin-left: 120px;">
    <a href="{{ route('home') }}" class="btn custom-button">VOLVER AL MENÚ</a>
    <a href="{{ route('blouses.create') }}" class="btn custom-button">AGREGAR BLUSA</a>
</div>
@endsection
