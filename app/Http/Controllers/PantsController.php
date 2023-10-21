<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Pants;
use Illuminate\Http\Request;

class PantsController extends Controller
{
    public function index()
    {
        $pants=Pants::all();
        return view('pantsindex', compact('pants'));
    }

    public function create()
    {
        return view('pantscreate');
    }

    public function store(Request $request)
    {
        //return $request->all();
        $pant = new Pants();
        $pant-> id = $request -> input('id');
        $pant -> users_id = $request -> input('users_id');
        $pant -> name_product = $request -> input('name_product');
        $pant -> description = $request -> input('description');
        $pant -> color = $request -> input('color');
        $pant -> size = $request -> input('size');
        $pant -> amount = $request -> input('amount');
        $pant -> price = $request -> input('price');
        $pant -> save();
        return redirect()->route('pants.index');
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
