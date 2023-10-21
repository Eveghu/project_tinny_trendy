@extends('layouts.app')
@section('title','Sets')
@section ('content')
@csrf

<p> LISTADO DE SETS</p>
<div class="row">
    @foreach ($sets as $set)
    <div class="col-sm">
        <div class="card text-center" style="width: 18rem; margin-top: 70px;">
        <div class="card-body">
          <h5 class="card-title">{{$set ->name_product}}</h5>
          <p class="card-text"> </p>
          <a href="/sets/{{$set->id}}" class="btn btn-secondary">MOSTRAR</a>

    </div>
  </div>
    </div>
@endforeach
</div>
@endsection