<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{   public $table = 'vehicules';
    public $primayKey = 'id';
    public $incrementing = true;
    public $timestamps=false;


    public function marque()
    {
        return $this->hasOne('App\Models\Marque', 'id_vehicule','id_marque');
    }


    public function module()
    {
        return $this->hasOne('App\Models\Marque', 'id_vehicule','id_module');
    }


}
