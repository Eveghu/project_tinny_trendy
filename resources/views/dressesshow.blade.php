@extends('layouts.app')
@section('title', 'Dresses')
@section('content')
<div class="card text-center" style="width: 18rem; margin-top: 70px;">
    <div class="card-body">
        <h5 class="card-title">{{$dress->name_product}}</h5>
        <p class="card-text">ID BLUSA: {{$dress->id}}</p>
        <p class="card-text">DESCRIPCIÓN: {{$dress->description}}</p>
        <p class="card-text">COLOR: {{$dress->color}}</p>
        <p class="card-text">TALLA: {{$dress->size}}</p>
        <p class="card-text">CANTIDAD: {{$dress->amount}}</p>
        <p class="card-text">PRECIO ${{$dress->price}}</p>
        <a href="/delete/{{$dress->id}}" class="btn btn-primary">ELIMINAR</a>
        <a href="/dresses/{{$dress->id}}/editdress" class="btn btn-secondary">EDITAR</a>
    </div>
</div>
@endsection

