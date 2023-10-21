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

    public function show(Dresses $dress)
    {
        return view('dressesshow', compact('dress'));
    }

    public function edit($id)
    {
        $dress = Dresses::find($id);
        return view('editdress', compact('dress'));
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
    
        $dress = Dresses::find($id);
    
        if (!$dress) {
            return redirect()->route('dresses.index')->with('error', 'Dress not found');
        }
    
        $dress->name_product = $request->input('name_product');
        $dress->description = $request->input('description');
        $dress->color = $request->input('color');
        $dress->size = $request->input('size');
        $dress->amount = $request->input('amount');
        $dress->price = $request->input('price');
    
        $dress->save();
    
        return redirect()->route('dresses.index')->with('success', 'Dress updated successfully');
    }
    
    public function destroy(string $id)
    {
        $dress = Dresses::find($id);

        if (!$dress) {
            return redirect('/dresses')->with('error', 'El vestido no existe o ya ha sido eliminada');
        }

        $dress->delete();

        return redirect('/dresses')->with('success', 'Vestido eliminado exitosamente');
    }

    // ...

}

   