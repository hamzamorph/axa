<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Souscripteur;
class Addcontrat extends Controller
{    
    public function index(Request $request){
        $data['souscripteurs'] = Souscripteur::get(["id_souscripteur"]);
        $data['id'] = $request->id;
        return view('layout/contrat', $data); 
       }

    


    public function show(){
        $data=Souscripteur::all(); 
      
        return view('layout/addcontrat', compact('data')); 
       }
}
