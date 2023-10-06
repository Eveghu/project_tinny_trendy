@extends('layouts.app')
@section('title','Dresses')
@section ('content')
@csrf

<p> LISTADO DE VESTIDOS</p>
<div class="row">
    @foreach ($dresses as $dress)
    <div class="col-sm">
        <div class="card text-center" style="width: 18rem; margin-top: 70px;">
        <div class="card-body">
          <h5 class="card-title">{{$dress ->name_product}}</h5>
          <p class="card-text"> </p>
          <a href="#" class="btn btn-primary">VER MAS...</a>
    </div>
  </div>
    </div>
@endforeach
</div>
@endsection