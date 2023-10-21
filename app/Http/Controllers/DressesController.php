<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Dresses;
use Illuminate\Http\Request;

class DressesController extends Controller
{
    public function index()
    {
        $dresses=Dresses::all();
        return view('dressesindex', compact('dresses'));
    }

    public function create()
    {
        return view('dressescreate');
    }

    public function store(Request $request)
    {
        //return $request->all();
        $dress= new Dresses();
        $dress -> id = $request -> input('id');
        $dress -> users_id = $request -> input('users_id');
        $dress -> name_product = $request -> input('name_product');
        $dress -> description = $request -> input('description');
        $dress -> color = $request -> input('color');
        $dress -> size = $request -> input('size');
        $dress -> amount = $request -> input('amount');
        $dress -> price = $request -> input('price');
        $dress -> save();
        return redirect()->route('dresses.index');
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
