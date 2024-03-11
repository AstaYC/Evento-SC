<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function displayCategorie (){
        $categories = Categorie::all();
        return view('Admin.CategorieTable' , compact('categories'));
    }

    public function addCategorie(Request $request){
       
       $request->validate([
           'nom' => 'required',
       ]);

       $categorie = new Categorie();
       $categorie->nom = $request->nom;
       $categorie->save();

       return redirect('/categorie')->with('status' , 'Ajoutage Bien Faite !!');
    }

    public function updateCategorie(Request $request){
       
        
        $request->validate([
            'nom' => 'required',
        ]);

        $categorie = Categorie::find($request->id);
        $categorie->nom = $request->nom;
        $categorie->update();

        return redirect('/categorie')->with('status' , 'La Modification Est Bien Faite !!');
    }

    public function deleteCategorie(Request $request){
        $request->validate([
            'id' => 'required',
        ]);
        $categorie = Categorie::find($request->id);
       $categorie->delete();

       return redirect('/categorie/display')->with('status' , 'La suppression est bien faite');
    }
}

