<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Souscripteur;
use Illuminate\Support\Facades\DB;

class AddSouscripteurController extends Controller
{
    public function add()
    {
        
       return view('layout/add');
       
       
    }
    public function show(){
        $souscripteurs =DB::table('souscripteurs')->get();

        return view('layout/listersouscripteur',compact('souscripteurs'));
    } 

    public function DataInsert(Request $request)
    {

        $request->validate([
            'cin'=>'required|regex:/^[A-Z]{1}\d{6}$/',
            'nom'=>'required|string|min:3',
            'prenom'=>'required|string|min:3',
            'sexe'=>'required',
            'date_de_naissance'=>'required|date|before:today',
            'adresse'=>'required|string',
            'ville'=>'required|string',
            'code_postale'=>'required|numeric|min:4',
            'tel'=>'required|numeric|min:4'
        ]);
        $souscripteurs = new Souscripteur;
        $souscripteurs->cin = $request->cin;
        $souscripteurs->nom = $request->nom;
        $souscripteurs->prenom = $request->prenom;
        $souscripteurs->sexe = $request->sexe;
        $souscripteurs->date_de_naissance = $request->date_de_naissance;
        $souscripteurs->adresse = $request->adresse;
        $souscripteurs->ville = $request->ville;
        $souscripteurs->code_postale= $request->code_postale;
        $souscripteurs->tel = $request->tel;
        $souscripteurs->save();
   
        return back();
       
       
    }
    public function destroy(Request $request,$id_souscripteur)
    {
       
        $souscripteurs =Souscripteur::find($id_souscripteur);
        $souscripteurs->delete();
        return back();
    }

  
   
   
 }

