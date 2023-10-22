@extends('layouts.app')
@section('title', 'Pants')
@section('content')
<h1 style="text-align: center;">DETALLES DE PANTALÓN</h1>

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
        <h5 class="card-title">{{$pant->name_product}}</h5>
        <p class="card-text">ID USUARIO: {{$pant->user_id}}</p>
        <p class="card-text">ID PANTALÓN: {{$pant->id}}</p>
        <p class="card-text">DESCRIPCIÓN: {{$pant->description}}</p>
        <p class="card-text">COLOR: {{$pant->color}}</p>
        <p class="card-text">TALLA: {{$pant->size}}</p>
        <p class="card-text">CANTIDAD: {{$pant->amount}}</p>
        <p class="card-text">PRECIO: ${{$pant->price}}</p>
        <form method="POST" action="{{ url('pants/delete', ['id' => $pant->id]) }}">
            @csrf
            <button type="submit" class="btn custom-button">ELIMINAR</button>
        </form>
                <a href="/pants/{{$pant->id}}/editpant" class="btn custom-button">EDITAR</a>
    </div>
</div>
<div style="margin-top: 0px; width: 18rem; margin: 70px auto;">
  <a href="{{ route('home') }}" class="btn custom-button">VOLVER AL MENÚ</a>
  <a href="{{ route('pants.create') }}" class="btn custom-button">AGREGAR PANTALÓN</a>
  <div style="text-align: center; margin-top: 20px;">
    <a href="{{ route('pants.index') }}" class="btn custom-button">VER PANTALONES</a>
</div>
</div>
@endsection

