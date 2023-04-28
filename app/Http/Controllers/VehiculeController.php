<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicule;
use App\Models\Marque;
use App\Models\Module;
use Illuminate\Support\Facades\DB;
class vehiculeController extends Controller
{
   
    public function index(){
        $vehicules =DB::table('vehicules')
        ->join('souscripteurs','vehicules.id','=','souscripteurs.id_souscripteur')
        ->select('vehicules.*','souscripteurs.*')
        ->get();

        return view('layout/listervehicule',compact('vehicules'));
    }

    public function show(){
        $vehicules =DB::table('vehicules')->get();

        return view('layout/listervehicule',compact('vehicules'));
    } 

    public function load(){
        $marques = Marque::all();
        $vehicules = Vehicule::with('module','marque')->get();
        return view('layout/vehicule',['marques'=>$marques,'vehicules'=>$vehicules]);
    }

       public function DataInsert(Request $request)
       {
        $request->validate([ 
            
            'combution'=>'required',
            'cylindre'=>'required', 
            'nombre_de_place'=>'required', 
            'mise_en_circulation'=>'required|date|before:today',
            'puissance_fiscale'=>'required', 
            'poids_en_charge'=>'required|numeric',
            'type_mine'=>'required|numeric|min:4',
            'id_module'=>'required',
            'id_marque'=>'required',
            'immatriculation'=>'required|string',
        ]);
           $vehicules = new Vehicule;
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
    public function edit($id)
    {     
         $vehicules =Vehicule::find($id);
         $marques = Marque::all() ;
         
       
        $result=compact('vehicules','marques');
        return View('layout/editer',$result);
        
      
    }

    public function update(Request $request,$id)
    {
        
    
        $vehicules =Vehicule::find($id);
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
        $vehicules->update();

       
        return View('layout/successeditvehicule');
    }

    public function destroy(Request $request,$id)
    {
        $vehicules =Vehicule::find($id);
        $vehicules->delete();
        return back();
    }


    }

