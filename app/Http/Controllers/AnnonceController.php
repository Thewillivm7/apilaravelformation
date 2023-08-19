<?php

namespace App\Http\Controllers;

use App\Models\Annonce;

use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    //
    public function index()
    {
        $Annonce=Annonce::all();
        return response()->json($Annonce);
    }

    public function create(request $request)
    {
        $annonce = Annonce::create($request->all());
        return response()->json($annonce);
    }

    public function update(request $request,$id)
    {
        $annonce = Annonce::find($id);
        $annonce-> update($request->all());
        return response()->json($annonce);
    }
    public function delete($id)
    {
        $annonce = Annonce::find($id);
        $annonce-> delete();
        return response()->json('Suppression réussie');
    }

    public function show($id)
    {
        $annonce = Annonce::find($id);
        return response()->json($annonce);

    }

    public function search($titre){
        $annonce=Annonce::where('titre','like','%' . $titre .'%')->get();
        return response()-> json($Annonce);
    }
}
