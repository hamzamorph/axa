<?php

namespace App\Http\Controllers;

use App\Models\Conducteur;
use App\Models\Souscripteur;


class AddVehicule extends Controller
{
    public function show(){
     $data=Souscripteur::all(); 
      
     return view('layout/addvehicule', compact('data')); 
    }


    
}
