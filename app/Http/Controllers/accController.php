<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Souscripteur;
use Illuminate\Support\Facades\DB;
class accController extends Controller
{
     public function index(){
        $userData = Souscripteur::select(DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('count');
        return view('layout.acceuil', compact('userData'));
    }
}
