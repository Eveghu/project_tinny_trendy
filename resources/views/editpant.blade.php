<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')
@section('title', 'Pants Edit')
@section('content')
<div class="container">
    <h2>EDITAR PANTALÓN</h2>
    <form method="POST" action="{{ route('pants.update', $pant->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name_product" class="form-label">Nombre del Producto:</label>
            <input type="text" name="name_product" value="{{ $pant->name_product }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción:</label>
            <input type="text" name="description" value="{{ $pant->description }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">Color:</label>
            <input type="text" name="color" value="{{ $pant->color }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="size" class="form-label">Talla:</label>
            <input type="text" name="size" value="{{ $pant->size }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Cantidad:</label>
            <input type="text" name="amount" value="{{ $pant->amount }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Precio:</label>
            <input type="text" name="price" value="{{ $pant->price }}" class="form-control">
        </div>
        <!-- Agrega otros campos para la edición de la blusa aquí -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary">GUARDAR</button>
        </div>
    </form>
</div>
@endsection

