<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Souscripteur extends Model
{
    use HasFactory;
    public $primaryKey = 'id_souscripteur';
    public $fillable = [
        'cin',
        'nom',
        'prenom',
        'sexe',
        'date_de_naissance',
        'ville',
        'adresse',
        'code_postal',
        'tel'
    ];
   


}
