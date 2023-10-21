@extends('layouts.app')
@section('title', 'Pants')
@section('content')
<div class="card text-center" style="width: 18rem; margin-top: 70px;">
    <div class="card-body">
        <h5 class="card-title">{{$pant->name_product}}</h5>
        <p class="card-text">ID BLUSA: {{$pant->id}}</p>
        <p class="card-text">DESCRIPCIÓN: {{$pant->description}}</p>
        <p class="card-text">COLOR: {{$pant->color}}</p>
        <p class="card-text">TALLA: {{$pant->size}}</p>
        <p class="card-text">CANTIDAD: {{$pant->amount}}</p>
        <p class="card-text">PRECIO ${{$pant->price}}</p>
        <a href="/delete/{{$pant->id}}" class="btn btn-primary">ELIMINAR</a>
        <a href="/pants/{{$pant->id}}/editblouse" class="btn btn-secondary">EDITAR</a>
    </div>
</div>
@endsection

