<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Blouses;
use Illuminate\Http\Request;

class BlousesController extends Controller
{
    public function index()
    {
        $blouses=Blouses::all();
        return view('blousesindex', compact('blouses'));
    }

    public function create()
    {
        return view('blousescreate');
    }

    public function store(Request $request)
    {
        //return $request->all();
        $blouse = new Blouses();
        $blouse -> id = $request -> input('id');
        $blouse -> users_id = $request -> input('users_id');
        $blouse -> name_product = $request -> input('name_product');
        $blouse -> description = $request -> input('description');
        $blouse -> color = $request -> input('color');
        $blouse -> size = $request -> input('size');
        $blouse -> amount = $request -> input('amount');
        $blouse -> price = $request -> input('price');
        $blouse -> save();
        return view('blousesindex');
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
