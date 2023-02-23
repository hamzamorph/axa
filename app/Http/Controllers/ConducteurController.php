<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conducteur;

class ConducteurController extends Controller
{
    public function conducteur()
    {
        
       return view('layout/conducteur');
       
       
    }
    public function DataInsert(Request $request)
    {
       
        $lien = $request->input('lien');
        $cin = $request->input('cin');
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $sexe = $request->input('sexe');
        $etat = $request->input('etat');
        $naissance = $request->input('naissance');
        $datepremis = $request->input('datepremis');
        $numpermis = $request->input('numpermis');
        $categorie= $request->input('categorie');
       


        $isInsertSuccress = Conducteur::insert([  'lien_avec_souscripteur'=>$lien , 'cin'=>$cin ,'nom'=>$nom ,'prenom'=>$prenom,
        'sexe'=>$sexe,'etat_civil'=>$etat,'date_de_naissance'=>$naissance,'date_de_permis'=>$datepremis,'num_permis'=>$numpermis,'categorie_permis'=>$categorie]);
        if($isInsertSuccress) return view('layout/conducteur');
        else  return view('layout/erreur');
    }
}
