@extends('layouts.app')
@section('title', 'Blouses')
@section('content')
<div class="card text-center" style="width: 18rem; margin-top: 70px;">
    <div class="card-body">
        <h5 class="card-title">{{$blouse->name_product}}</h5>
        <p class="card-text">ID BLUSA: {{$blouse->id}}</p>
        <p class="card-text">DESCRIPCIÓN: {{$blouse->description}}</p>
        <p class="card-text">COLOR: {{$blouse->color}}</p>
        <p class="card-text">TALLA: {{$blouse->size}}</p>
        <p class="card-text">CANTIDAD: {{$blouse->amount}}</p>
        <p class="card-text">PRECIO ${{$blouse->price}}</p>
        <a href="/delete/{{$blouse->id}}" class="btn btn-primary">ELIMINAR</a>
        <a href="/blouses/{{$blouse->id}}/editblouse" class="btn btn-secondary">EDITAR</a>
    </div>
</div>
@endsection

