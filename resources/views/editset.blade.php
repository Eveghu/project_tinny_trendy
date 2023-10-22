<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')
@section('title', 'Sets Edit')
@section('content')
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
<div class="container">
    <h2>EDITAR SET</h2>
    <form method="POST" action="{{ route('sets.update', $set->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name_product" class="form-label">Nombre del Producto:</label>
            <input type="text" name="name_product" value="{{ $set->name_product }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción:</label>
            <input type="text" name="description" value="{{ $set->description }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">Color:</label>
            <input type="text" name="color" value="{{ $set->color }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="size" class="form-label">Talla:</label>
            <input type="text" name="size" value="{{ $set->size }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Cantidad:</label>
            <input type="text" name="amount" value="{{ $set->amount }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Precio:</label>
            <input type="text" name="price" value="{{ $set->price }}" class="form-control">
        </div>
        <!-- Agrega otros campos para la edición de la blusa aquí -->
        <div class="text-center">
            <button type="submit" class="btn custom-button">GUARDAR</button>
            <a href="/blouses/{{ $set->id }}" class="btn custom-button">DETALLES</a>
                  <a href="{{ route('sets.create') }}" class="btn custom-button">AGREGAR SET</a>
                  <a href="{{ route('home') }}" class="btn custom-button">VOLVER AL MENÚ</a>

        </div>
    </form>
</div>
@endsection

