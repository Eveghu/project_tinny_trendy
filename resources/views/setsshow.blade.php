@extends('layouts.app')
@section('title', 'Sets')
@section('content')
<div class="card text-center" style="width: 18rem; margin-top: 70px;">
    <div class="card-body">
        <h5 class="card-title">{{$set->name_product}}</h5>
        <p class="card-text">ID BLUSA: {{$set->id}}</p>
        <p class="card-text">DESCRIPCIÓN: {{$set->description}}</p>
        <p class="card-text">COLOR: {{$set->color}}</p>
        <p class="card-text">TALLA: {{$set->size}}</p>
        <p class="card-text">CANTIDAD: {{$set->amount}}</p>
        <p class="card-text">PRECIO ${{$set->price}}</p>
        <a href="/delete/{{$set->id}}" class="btn btn-primary">ELIMINAR</a>
        <a href="/sets/{{$set->id}}/editset" class="btn btn-secondary">EDITAR</a>
    </div>
</div>
@endsection

