<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Souscripteur;

class AddSouscripteurController extends Controller
{
    public function add()
    {
        
       return view('layout/add');
       
       
    }
    public function DataInsert(Request $request)
    {
        $cin = $request->input('cin');
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $sexe = $request->input('sexe');
        $date_de_naissance = $request->input('date_de_naissance');
        $adresse = $request->input('adresse');
        $ville = $request->input('ville');
        $code_postale= $request->input('code_postale');
        $tel = $request->input('tel');


        $isInsertSuccress = Souscripteur::insert([ 'cin'=>$cin , 'nom'=>$nom ,'prenom'=>$prenom,
        'sexe'=>$sexe,'date_de_naissance'=>$date_de_naissance,'adresse'=>$adresse,'ville'=>$ville,'code_postale'=>$code_postale,'tel'=>$tel]);
        if($isInsertSuccress) return view('layout/add');
        else  return view('layout/erreur');
    }
}
