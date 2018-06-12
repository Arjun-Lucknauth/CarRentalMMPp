<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Vehicle extends Model
{
    public function attributes(){
        //return $this->hasMany ( '\App\VehiclesAttribute','vehicle_id');
    }
    protected $fillable = [
        'ur',
    ];
}
