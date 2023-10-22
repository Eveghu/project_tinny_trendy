@extends('layouts.app')
@section('title', 'Sets')
@section('content')
<h1 style="text-align: center;">DETALLES DE SET</h1>

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
        <h5 class="card-title">{{$set->name_product}}</h5>
        <p class="card-text">ID USUARIO: {{$set->user_id}}</p>
        <p class="card-text">ID SET: {{$set->id}}</p>
        <p class="card-text">DESCRIPCIÓN: {{$set->description}}</p>
        <p class="card-text">COLOR: {{$set->color}}</p>
        <p class="card-text">TALLA: {{$set->size}}</p>
        <p class="card-text">CANTIDAD: {{$set->amount}}</p>
        <p class="card-text">PRECIO ${{$set->price}}</p>
        <form method="POST" action="{{ url('sets/delete', ['id' => $set->id]) }}">
          @csrf
          <button type="submit" class="btn custom-button">ELIMINAR</button>
      </form>        <a href="/sets/{{$set->id}}/editset" class="btn custom-button">EDITAR</a>
    </div>
</div>
<div style="margin-top: 0px; width: 18rem; margin: 70px auto;">
  <a href="{{ route('home') }}" class="btn custom-button">VOLVER AL MENÚ</a>
  <a href="{{ route('sets.create') }}" class="btn custom-button">AGREGAR BLUSA</a>
  <div style="text-align: center; margin-top: 20px;">
    <a href="{{ route('sets.index') }}" class="btn custom-button">VER SETS</a>
</div>
</div>
@endsection

