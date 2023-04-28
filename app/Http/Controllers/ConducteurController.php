<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conducteur;
use Illuminate\Support\Facades\DB;

class ConducteurController extends Controller
{
    public function conducteur()
    {
        
       return view('layout/conducteur');
       
       
    }
    public function show(){
        $conducteurs =DB::table('conducteurs')->get();

        return view('layout/listerconducteur',compact('conducteurs'));
    } 
    public function DataInsert(Request $request)
    {
        $request->validate([
            'cin'=>'required|regex:/^[A-Z]{1}\d{6}$/',
            'nom'=>'required|string|min:3',
            'prenom'=>'required|string|min:3',
            'sexe'=>'required',
            'etat_civil'=>'required',
            'date_de_naissance'=>'required|date|before:today',
            'date_de_permis'=>'required|date|before:today',
            'categorie_permis'=>'required|string',
            'num_permis'=>'required|numeric|min:4'
           
        ]);
        $conducteurs = new Conducteur;
       
        $conducteurs->cin = $request->cin;
        $conducteurs->nom = $request->nom;
        $conducteurs->prenom = $request->prenom;
        $conducteurs->sexe = $request->sexe;
        $conducteurs->etat_civil = $request->etat_civil;
        $conducteurs->date_de_naissance = $request->date_de_naissance;
        $conducteurs->date_de_permis = $request->date_de_permis;
        $conducteurs->num_permis = $request->num_permis;
        $conducteurs->categorie_permis= $request->categorie_permis;
        $conducteurs->id_souscripteur = $request->id_souscripteur ;


        $conducteurs->save();

        return back();
    }
    public function edit($id)
    {     
         $conducteurs =Conducteur::find($id);
        $result=compact('conducteurs');
        return View('layout/editerconducteur',$result);
        
      
    }

    public function update(Request $request,$id)
    {
        
    
        $conducteurs =Conducteur::find($id);
        $conducteurs->cin = $request->cin;
        $conducteurs->nom = $request->nom;
        $conducteurs->prenom = $request->prenom;
        $conducteurs->sexe = $request->sexe;
        $conducteurs->etat_civil = $request->etat_civil;
        $conducteurs->date_de_naissance = $request->date_de_naissance;
        $conducteurs->date_de_permis = $request->date_de_permis;
        $conducteurs->num_permis = $request->num_permis;
        $conducteurs->categorie_permis= $request->categorie_permis;
        $conducteurs->id_souscripteur = $request->id_souscripteur ;

        $conducteurs->update();

       
        return View('layout/successeditvehicule');
    }
    public function destroy(Request $request,$id)
    {
        $conducteurs =Conducteur::find($id);
        $conducteurs->delete();
        return back();
    }
}
