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
        return redirect()->route('sets.index');
    }

    public function show(Sets $set)
    {
        return view('setsshow', compact('set'));
    }

    public function edit($id)
    {
        $set = Sets::find($id);
        return view('editset', compact('set'));
    }
    

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_product' => 'required',
            'description' => 'required',
            'color' => 'required',
            'size' => 'required',
            'amount' => 'required|numeric',
            'price' => 'required|numeric',
        ]);
    
        $set = Sets::find($id);
    
        if (!$set) {
            return redirect()->route('sets.index')->with('error', 'Set not found');
        }
    
        $set->name_product = $request->input('name_product');
        $set->description = $request->input('description');
        $set->color = $request->input('color');
        $set->size = $request->input('size');
        $set->amount = $request->input('amount');
        $set->price = $request->input('price');
    
        $set->save();
    
        return redirect()->route('sets.index')->with('success', 'Set updated successfully');
    }

    public function destroy(string $id)
    {
        $set = Sets::find($id);

        if (!$set) {
            return redirect('/sets')->with('error', 'El set no existe o ya ha sido eliminada');
        }

        $set->delete();

        return redirect('/sets')->with('success', 'Set eliminado exitosamente');
    }

    // ...

}

   