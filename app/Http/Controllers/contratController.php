<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrat;
use Illuminate\Support\Facades\DB;
class contratController extends Controller
{


    public function contrat()
    {
        
       return view('layout/contrat');
       
       
    }



    
    public function show(){
        $contrats =DB::table('contrats')->get();

        return view('layout/listercontrat',compact('contrats'));
    } 
    public function DataInsert(Request $request)
    {
        $request->validate([
            'date_de_debut'=>'required|date|after_or_equal:today',
            'date_de_fin'=>'required|date|after:today',
            'montant_prime'=>'required|numeric|min:4'
        ]);

        $contrats = new Contrat;
        $contrats->id_souscripteur = $request->id_souscripteur ;
        $contrats->date_de_debut = $request->date_de_debut ;
        $contrats->date_de_fin = $request->date_de_fin;
        $contrats->montant_prime = $request->montant_prime ;
        
        $contrats->save();

        return back();
    } 





    public function edit($id)
    {     
         $contrats =Contrat::find($id);
        $result=compact('contrats');
        return View('layout/editercontrat',$result);
        
      
    }

    public function update(Request $request,$id)
    {
        
    
        $contrats =Contrat::find($id);
        $contrats->id_souscripteur = $request->id_souscripteur ;
        $contrats->date_de_debut = $request->date_de_debut ;
        $contrats->date_de_fin = $request->date_de_fin;
        $contrats->montant_prime = $request->montant_prime ;
        $contrats->update();

       
        return View('layout/successeditvehicule');
    }
    public function destroy(Request $request,$id)
    {
        $contrats =Contrat::find($id);
        $contrats->delete();
        return back();
    }

    }
