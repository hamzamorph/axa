<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marque;
use App\Models\Module;

class DropdownController extends Controller
{
    public function index(Request $request)
    {
        $data['marques'] = Marque::get(["marque", "id_marque"]);
        $data['id'] = $request->id;
        return view('layout/vehicule', $data);
    }
    
    public function fetchmodule(Request $request)
    {
        $data['modules'] = Module::where("id_marque", $request->id_marque)->get(["id_module", "module"]);
        return response()->json($data);
    }


   

    

    
    
}
