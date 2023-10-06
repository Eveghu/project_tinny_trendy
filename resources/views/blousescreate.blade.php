<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

@extends('layouts.app')
@section('title','Blouses Create')
@section('content')
<form class="form-group" method="POST" action="/blouses" >
    @csrf
    <div class="form-group">
        <label for="">ID:</label>
        <input type="text" name="id" class="form-control">
        <label for="">ID USUARIO:</label>
        <input type="text" name="users_id" class="form-control">
        <label for="">NOMBRE DEL PRODUCTO:</label>
        <input type="text" name="name_product" class="form-control">
        <label for="">DESCRIPCION:</label>
        <input type="text" name="description" class="form-control">
        <label for="">COLOR:</label>
        <input type="text" name="color" class="form-control">
        <label for="">TALLA:</label>
        <input type="text" name="size" class="form-control">
        <label for="">CANTIDAD:</label>
        <input type="text" name="amount" class="form-control">
        <label for="">PRECIO:</label>
        <input type="text" name="price" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">
        Guardar</button>
    </form>
@endsection
