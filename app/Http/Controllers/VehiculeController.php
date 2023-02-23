<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicule;
use App\Models\Marque;
use App\Models\Module;

class vehiculeController extends Controller
{
   
    public function load(){
        $marques = Marque::all();
        $vehicules = Vehicule::with('module','marque')->get();
        return view('layout/vehicule',['marques'=>$marques,'vehicules'=>$vehicules]);
    }

       public function DataInsert(Request $request)
       {
           $vehicules = new Vehicule;
           $vehicules->usage = $request->usage ;
           $vehicules->combution = $request->combution ;
           $vehicules->cylindre = $request->cylindre;
           $vehicules->mise_en_circulation = $request->mise_en_circulation ;
           $vehicules->nombre_de_place = $request->nombre_de_place;
           $vehicules->immatriculation = $request->immatriculation ;
           $vehicules->puissance_fiscale = $request->puissance_fiscale ;
           $vehicules->poids_en_charge = $request->poids_en_charge ;
           $vehicules->type_mine = $request->type_mine ;
           $vehicules->id_module= $request->id_module ;
           $vehicules->id_marque = $request->id_marque ;
           $vehicules->id_souscripteur = $request->id_souscripteur ;
           $vehicules->save();
   
           return back();
       }

       public function getModules($id_marque)
    {
        $modules = Module::where('id_marque',$id_marque)->get();
        return response()->json(['modules'=>$modules]);
    }
    public function editer(Request $request)
    {
        $data['marques'] = Marque::get(["marque", "id_marque"]);
        $data['id'] = $request->id;
       return view('layout/editer',$data);
    }
    }