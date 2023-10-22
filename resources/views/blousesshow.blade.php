@extends('layouts.app')
@section('title', 'Blouses')
@section('content')
<h1 style="text-align: center;">DETALLES DE BLUSA</h1>

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
        <h5 class="card-title">{{$blouse->name_product}}</h5>
        <p class="card-text">ID USUARIO: {{$blouse->user_id}}</p>
        <p class="card-text">ID BLUSA: {{$blouse->id}}</p>
        <p class="card-text">DESCRIPCIÓN: {{$blouse->description}}</p>
        <p class="card-text">COLOR: {{$blouse->color}}</p>
        <p class="card-text">TALLA: {{$blouse->size}}</p>
        <p class="card-text">CANTIDAD: {{$blouse->amount}}</p>
        <p class="card-text">PRECIO: ${{$blouse->price}}</p>
        <form method="POST" action="{{ url('blouses/delete', ['id' => $blouse->id]) }}">
        @csrf
        <button type="submit" class="btn custom-button">ELIMINAR</button>
      </form>
      <a href="/blouses/{{$blouse->id}}/editblouse" class="btn custom-button">EDITAR</a>
    </div>
</div>
<div style="margin-top: 0px; width: 18rem; margin: 70px auto;">
  <a href="{{ route('home') }}" class="btn custom-button">VOLVER AL MENÚ</a>
  <a href="{{ route('blouses.create') }}" class="btn custom-button">AGREGAR BLUSA</a>
  <div style="text-align: center; margin-top: 20px;">
    <a href="{{ route('blouses.index') }}" class="btn custom-button">VER BLUSAS</a>
</div>
</div>
@endsection

