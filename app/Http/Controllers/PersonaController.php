<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{

    public function showAllPersonas()
    {
        return response()->json(Persona::all());
    }

    public function showOnePersona($id)
    {
        return response()->json(Persona::find($id));
    }

    public function create(Request $request)
    {
        $author = Persona::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = Persona::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Persona::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}