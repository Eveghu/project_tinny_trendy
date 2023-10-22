@extends('layouts.app')
@section('title', 'Dresses')
@section('content')
<h1 style="text-align: center;">DETALLES DE VESTIDO</h1>

<div class="card text-center" style="width: 18rem; margin: 70px auto;">
    <style>
        .custom-button {
          font-size: 14px; /* Reduce el tamaño de la fuente */
          background-color: #e7d8df; /* Cambia el color de fondo a tu elección */
          color: #fff; /* Cambia el color del texto a blanco */
          border: none;
          padding: 5px 10px; /* Añade un espacio interno al botón */
          border-radius: 5px; /* Añade bordes redondeados */
          transition: background-color 0.3s; /* Agrega una transición al color de fondo */
        }
      
        /* Estilo al pasar el mouse por encima (hover) */
        .custom-button:hover {
          background-color: #ff8bb4; /* Cambia el color de fondo al pasar el mouse */
        }
      </style>
    <div class="card-body">
        <h5 class="card-title">{{$dress->name_product}}</h5>
        <p class="card-text">ID USUARIO: {{$dress->users_id}}</p>
        <p class="card-text">ID VESTIDO: {{$dress->id}}</p>
        <p class="card-text">DESCRIPCIÓN: {{$dress->description}}</p>
        <p class="card-text">COLOR: {{$dress->color}}</p>
        <p class="card-text">TALLA: {{$dress->size}}</p>
        <p class="card-text">CANTIDAD: {{$dress->amount}}</p>
        <p class="card-text">PRECIO ${{$dress->price}}</p>
        <form method="POST" action="{{ url('dresses/delete', ['id' => $dress->id]) }}">
          @csrf
            <button type="submit" class="btn custom-button">ELIMINAR</button>
        </form>
       <a href="/dresses/{{$dress->id}}/editdress" class="btn custom-button">EDITAR</a>
    </div>
</div>
<div style="margin-top: 0px; width: 18rem; margin: 70px auto;">
  <a href="{{ route('home') }}" class="btn custom-button">VOLVER AL MENÚ</a>
  <div style="text-align: right; margin-top: -32px; margin-right: -40px;">
    <a href="{{ route('dresses.create') }}" class="btn custom-button">AGREGAR VESTIDO</a>
  </div>
  
  <div style="text-align: center; margin-top: 20px;">
    <a href="{{ route('dresses.index') }}" class="btn custom-button">VER VESTIDOS</a>
</div>
</div>
@endsection

