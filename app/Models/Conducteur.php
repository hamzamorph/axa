<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conducteur extends Model
{
    public $table = 'conducteurs';
    public $primayKey = 'id_conducteur';
    public $incrementing = true;
    public $timestamps=false;

   
}
