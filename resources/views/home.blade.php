@extends('layouts.app')

@section('content')
<div class="container">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
    font-size: 48px;
    margin-top: 50px;
    font-family: "Arial", sans-serif; /* Cambia la fuente a Arial o a tu elección */
    font-weight: bold; /* Hace la fuente más gruesa (bold) */
}

.menu {
    display: flex;
    justify-content: center;
    list-style: none;
    margin-top: 20px;
    background-color: #f0f0f0;
    padding: 10px;
    border-radius: 20px;
    font-size: 24px; /* Aumentar el tamaño de la letra a 24px */
}

.menu .dropdown {
    margin: 0 100px; /* Añade margen izquierdo y derecho para separar los títulos */
}


.menu a {
    text-decoration: none;
    color: #333;
    margin: 0 10px; /* Reducido el espacio a la derecha del texto */
    font-size: 18px;
    border-radius: 50px;
}


        .menu a:hover {
            color: #f3609d;
        }

        img {
    margin-top: 20px;
    max-width: 50%; /* Reducido al 50% del ancho máximo */
    max-height: 50%; /* Reducido al 50% de la altura máxima */
    height: auto;
}


        .dropdown {
            position: relative;
            display: inline-block;
            margin: 0 20px;
        }

        .dropdown button {
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-size: 18px; /* Reduje el tamaño de la letra del botón */
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .box {
    background: #f9f9f9;
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
    border-radius: 5px;
    background-color: #f1f0f0; /* Cambia el color de fondo a tu elección */
}

    </style>

    <body>
        <h1>TINNY TRENDY</h1>

        <div class="menu">
            <div class="dropdown">
                <button>Blusas</button>
                <div class="dropdown-content box"> <!-- Agregamos la clase "box" para la caja -->
                  <a href="{{ route('blouses.create') }}">Agregar Blusa</a>
                  <a href="{{ route('blouses.index') }}"> Ver Blusas</a>
              </div>
              
            </div>

            <div class="dropdown">
                <button>Pantalones</button>
                <div class="dropdown-content box"> <!-- Agregamos la clase "box" para la caja -->
                    <a href="{{ route('pants.create') }}">Agregar Pantalón</a>
                    <a href="{{ route('pants.index') }}">Ver Pantalones</a>
                </div>
            </div>

            <div class="dropdown">
                <button>Sets</button>
                <div class="dropdown-content box"> <!-- Agregamos la clase "box" para la caja -->
                    <a href="{{ route('sets.create') }}">Agregar Set</a>
                    <a href="{{ route('sets.index') }}">Ver Sets</a>
                </div>
            </div>

            <div class="dropdown">
                <button>Vestidos</button>
                <div class="dropdown-content box"> <!-- Agregamos la clase "box" para la caja -->
                    <a href="{{ route('dresses.create') }}">Agregar Vestido</a>
                    <a href="{{ route('dresses.index') }}">Ver Vestidos</a>
                </div>
            </div>
        </div>

        <img src="{{ asset('img.jpeg') }}" class="img-fluid">
        <p style="font-size: 24px; font-weight: bold;">¡LA VIDA ES MUY CORTA COMO PARA NO VESTIRTE COMO QUIERAS !</p>

    </body>

    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

