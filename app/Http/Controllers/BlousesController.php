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
        return redirect()->route('blouses.index');
    }

    public function show(Blouses $blouse)
{
    return view('blousesshow', compact('blouse'));
}


public function edit($id)
{
    $blouse = Blouses::find($id);
    return view('editblouse', compact('blouse'));
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

    $blouse = Blouses::find($id);

    if (!$blouse) {
        return redirect()->route('blouses.index')->with('error', 'Blouse not found');
    }

    $blouse->name_product = $request->input('name_product');
    $blouse->description = $request->input('description');
    $blouse->color = $request->input('color');
    $blouse->size = $request->input('size');
    $blouse->amount = $request->input('amount');
    $blouse->price = $request->input('price');

    $blouse->save();

    return redirect()->route('blouses.index')->with('success', 'Blouse updated successfully');
}


    // ...


    public function destroy(string $id)
    {
        $blouse = Blouses::find($id);

        if (!$blouse) {
            return redirect('/blouses')->with('error', 'La blusa no existe o ya ha sido eliminada');
        }

        $blouse->delete();

        return redirect('/blouses')->with('success', 'Blusa eliminada exitosamente');
    }

    // ...

}

   
