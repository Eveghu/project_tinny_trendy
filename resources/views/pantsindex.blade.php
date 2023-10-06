@extends('layouts.app')
@section('title','Pants')
@section ('content')
@csrf

<p> LISTADO DE PANTALONES</p>
<div class="row">
    @foreach ($pants as $pant)
    <div class="col-sm">
        <div class="card text-center" style="width: 18rem; margin-top: 70px;">
        <div class="card-body">
          <h5 class="card-title">{{$pant ->name_product}}</h5>
          <p class="card-text"> </p>
          <a href="#" class="btn btn-primary">VER MAS...</a>
    </div>
  </div>
    </div>
@endforeach
</div>
@endsection