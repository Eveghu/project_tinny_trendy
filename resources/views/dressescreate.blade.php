<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

@extends('layouts.app')

@section('title', 'Dresses Create')

@section('content')
<div class="container">
    <h1>AGREGAR VESTIDO</h1>

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

    <form method="POST" action="/dresses">
        @csrf

        <div class="mb-3">
            <label for="id">ID:</label>
            <input type="text" name="id" id="id" class="form-control">
        </div>

        <div class="mb-3">
            <label for="users_id">ID USUARIO:</label>
            <input type="text" name="users_id" id="users_id" class="form-control">
        </div>

        <div class="mb-3">
            <label for="name_product">NOMBRE DEL PRODUCTO:</label>
            <input type="text" name="name_product" id="name_product" class="form-control">
        </div>

        <div class="mb-3">
            <label for="description">DESCRIPCION:</label>
            <input type="text" name="description" id="description" class="form-control">
        </div>

        <div class="mb-3">
            <label for="color">COLOR:</label>
            <input type="text" name="color" id="color" class="form-control">
        </div>

        <div class="mb-3">
            <label for="size">TALLA:</label>
            <input type="text" name="size" id="size" class="form-control">
        </div>

        <div class="mb-3">
            <label for="amount">CANTIDAD:</label>
            <input type="text" name="amount" id="amount" class="form-control">
        </div>

        <div class="mb-3">
            <label for="price">PRECIO:</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>

        <button type="submit" class="btn custom-button">GUARDAR</button>
        <a href="{{ route('home') }}" class="btn custom-button">VOLVER AL MENÚ</a>
        <a href="{{ route('dresses.create') }}" class="btn custom-button">VER VESTIDOS</a>
    </form>
</div>
