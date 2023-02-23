<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\AddSouscripteurController;
use App\Http\Controllers\ConducteurController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\AddVehicule;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout.acceuil');
});



 Route::get('/conducteur', function () {
    return view('layout.conducteur'); 
});

Route::get('/addvehicule', function () {
    return view('layout.addvehicule');
});

Route::get('/vehicule', [VehiculeController::class,'load']);
Route::post('/vehicule', [VehiculeController::class,'DataInsert']);



Route::get('/vehicule', [DropdownController::class, 'index']);
Route::post('api/fetch-modules', [DropdownController::class, 'fetchmodule']);


Route::get('/add', [AddSouscripteurController::class,'add']);
Route::post('dataInsert', [AddSouscripteurController::class,'DataInsert']);



Route::get('/conducteur', [ConducteurController::class,'conducteur']);
Route::post('dataInsert1', [ConducteurController::class,'DataInsert']);



Route::post('dataInsert2', [VehiculeController::class,'DataInsert']);


Route::get('/addvehicule',[AddVehicule::class,'show']);

// new code
Route::get('souscripteur/{id}/vehicule', [DropdownController::class, 'index']);


Route::get('souscripteur/{id}/editer', [VehiculeController::class, 'editer']);

