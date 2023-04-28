<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\AddSouscripteurController;
use App\Http\Controllers\ConducteurController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\AddVehicule;
use App\Http\Controllers\Addcontrat;
use App\Http\Controllers\Addconducteur;
use App\Http\Controllers\contratController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\accController;
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

Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');
Route::get('/', function () {
    return view('layout.acceuil');
})->middleware(['auth', 'verified'])->name('acceuil');

Route::middleware('auth')->group(function () {

Route::get('/', function () {
    return view('layout.acceuil');
});
Route::get('/successeditvehicule', function () {
    return view('layout.successeditvehicule');
});
Route::get('/listervehicule', function () {
    return view('layout.listervehicule');
});

 Route::get('/addconducteur', function () {
    return view('layout.addconducteur'); 
});
Route::get('/conducteur', function () {
    return view('layout.conducteur'); 
});
Route::get('/addvehicule', function () {
    return view('layout.addvehicule');
});

Route::get('/addcontrat', function () {
    return view('layout.addcontrat');
});
Route::get('/contrat', function () {
    return view('layout.contrat');
});
Route::get('/', [accController::class, 'index']);
Route::get('/vehicule', [VehiculeController::class,'load']);
Route::post('/vehicule', [VehiculeController::class,'DataInsert']);

Route::post('/conducteur', [VehiculeController::class,'DataInsert']);

Route::get('/vehicule', [DropdownController::class, 'index']);
Route::post('api/fetch-modules', [DropdownController::class, 'fetchmodule']);



Route::get('/add', [AddSouscripteurController::class,'add']);
Route::post('dataInsert', [AddSouscripteurController::class,'DataInsert']);
Route::get('/listersouscripteur', [AddSouscripteurController::class, 'show']);
Route::delete('/deletesouscripteur/{id}', [AddSouscripteurController::class,'destroy']);




Route::get('/conducteur', [ConducteurController::class,'conducteur']);
Route::post('dataInsert1', [ConducteurController::class,'DataInsert']);

Route::get('/contrat', [contratController::class,'contrat']);
Route::post('dataInsert3', [contratController::class,'DataInsert']);

Route::post('dataInsert2', [VehiculeController::class,'DataInsert']);


Route::get('/addvehicule',[AddVehicule::class,'show']);
Route::get('/addconducteur',[Addconducteur::class,'show']);
Route::get('/addcontrat',[Addcontrat::class,'show']);
// new code
Route::get('souscripteur/{id}/vehicule', [DropdownController::class, 'index']);
Route::get('vehicule/{id}/editer', [VehiculeController::class, 'load']);
Route::get('souscripteur/{id}/contrat', [Addcontrat::class, 'index']);
Route::get('souscripteur/{id}/conducteur', [Addconducteur::class, 'index']);



Route::get('/listervehicule', [VehiculeController::class, 'show']);
Route::get('editer/{id}', [VehiculeController::class, 'show']);
Route::get('editer/{id}', [VehiculeController::class, 'edit']);
Route::post('/update/{id}', [VehiculeController::class,'update']);
Route::delete('/deletevehicule/{id}', [VehiculeController::class,'destroy']);


Route::get('/listercontrat', [contratController::class, 'show']);
Route::get('editercontrat/{id}', [contratController::class, 'show']);
Route::get('editercontrat/{id}', [contratController::class, 'edit']);
Route::post('/update1/{id}', [contratController::class,'update']);
Route::delete('/deletecontrat/{id}', [contratController::class,'destroy']);

Route::get('/listerconducteur', [ConducteurController::class, 'show']);
Route::get('editerconducteur/{id}', [ConducteurController::class, 'show']);
Route::get('editerconducteur/{id}', [ConducteurController::class, 'edit']);
Route::post('/update2/{id}', [ConducteurController::class,'update']);
Route::delete('/deleteconducteur/{id}', [ConducteurController::class,'destroy']);


Route::get('/end', [AuthenticatedSessionController::class, 'end']);


});

require __DIR__.'/auth.php';



