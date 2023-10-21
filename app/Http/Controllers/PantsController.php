<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pants;
use Illuminate\Http\Request;

class PantsController extends Controller
{
    public function index()
    {
        $pants = Pants::all();
        return view('pantsindex', compact('pants'));
    }

    public function create()
    {
        return view('pantscreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'users_id' => 'required',
            'name_product' => 'required',
            'description' => 'required',
            'color' => 'required',
            'size' => 'required',
            'amount' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        $pant = new Pants();
        $pant->id = $request->input('id');
        $pant->users_id = $request->input('users_id');
        $pant->name_product = $request->input('name_product');
        $pant->description = $request->input('description');
        $pant->color = $request->input('color');
        $pant->size = $request->input('size');
        $pant->amount = $request->input('amount');
        $pant->price = $request->input('price');
        $pant->save();

        return redirect()->route('pants.index');
    }

    public function show(Pants $pant)
    {
        return view('pantsshow', compact('pant'));
    }
    
    
    public function edit($id)
    {
        $pant = Pants::find($id);
        return view('editpant', compact('pant'));
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
    
        $pant = Pants::find($id);
    
        if (!$pant) {
            return redirect()->route('pants.index')->with('error', 'Pant not found');
        }
    
        $pant->name_product = $request->input('name_product');
        $pant->description = $request->input('description');
        $pant->color = $request->input('color');
        $pant->size = $request->input('size');
        $pant->amount = $request->input('amount');
        $pant->price = $request->input('price');
    
        $pant->save();
    
        return redirect()->route('pants.index')->with('success', 'Pant updated successfully');
    }
    
    
        // ...
    
    
        public function destroy(string $id)
        {
            $pant = Pants::find($id);
    
            if (!$pant) {
                return redirect('/blouses')->with('error', 'El pantalón no existe o ya ha sido eliminada');
            }
    
            $pant->delete();
    
            return redirect('/Pants')->with('success', 'Pantalón eliminado exitosamente');
        }
    
        // ...
    
    }
    
       
    