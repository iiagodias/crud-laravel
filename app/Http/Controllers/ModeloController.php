<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelo;

class ModeloController extends Controller
{

    public function index()
    {
       $modelos = Modelo::all();
       return view('modelos/index')->with(['modelos' => $modelos]);
    }


    public function create()
    {
        return view('modelos/create');
    }


    public function store(Request $request)
    {
        Modelo::create($request->all());
        return redirect()->route('modelos.index');
    }

    
    public function show($id)
    {   
        $modelo = Modelo::find($id);
        return  view('modelos/show')->with(['modelo' => $modelo]);
    }


    public function edit($id)
    {
        $modelo = Modelo::find($id);
        return  view('modelos/edit')->with(['modelo' => $modelo]);
    }


    public function update(Request $request, $id)
    {
        $modelo = Modelo::find($id)->update($request->all());
        return redirect()->route('modelos.index');
    }


    public function destroy($id)
    {
        $modelo = Modelo::findOrFail($id);
        $modelo->delete();
        return redirect()->route('modelos.index');
    }
}
