<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Souscripteur extends Model
{
    public $table = 'souscripteurs';
    public $primayKey = 'id_souscripteur';
    public $incrementing = true;
    public $timestamps=false;
}
