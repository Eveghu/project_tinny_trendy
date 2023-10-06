<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Sets;
use Illuminate\Http\Request;

class SetsController extends Controller
{
    public function index()
    {
        $sets=Sets::all();
        return view('setsindex', compact('sets'));
    }

    public function create()
    {
        return view('setscreate');
    }

    public function store(Request $request)
    {
        //return $request->all();
        $set = new Sets();
        $set -> id = $request -> input('id');
        $set -> users_id = $request -> input('users_id');
        $set -> name_product = $request -> input('name_product');
        $set -> description = $request -> input('description');
        $set -> color = $request -> input('color');
        $set -> size = $request -> input('size');
        $set -> amount = $request -> input('amount');
        $set -> price = $request -> input('price');
        $set -> save();
        return view('setsindex');
    }

    public function show($id)
    {
        // Lógica para mostrar un registro específico del modelo en la vista
    }

    public function edit($id)
    {
        // Lógica para mostrar el formulario de edición
    }

    public function update(Request $request, $id)
    {
        // Lógica para actualizar un registro específico en la base de datos
    }

    public function destroy($id)
    {
        // Lógica para eliminar un registro específico de la base de datos
    }
}
