<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conducteur;
use App\Models\Souscripteur;

class Addconducteur extends Controller
{
     public function index(Request $request){
        $data['souscripteurs'] = Souscripteur::get(["id_souscripteur"]);
        $data['id'] = $request->id;
        return view('layout/conducteur', $data); 
       }

    public function show(){
        $data=Souscripteur::all(); 
         
        return view('layout/addconducteur', compact('data')); 
       }
   
      
    
}
