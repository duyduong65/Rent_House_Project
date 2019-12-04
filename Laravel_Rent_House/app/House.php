<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table = 'houses';
    protected $fillable = ['name', 'kindHouse', 'kindRoom', 'address', 'numBedroom', 'numBathroom', 'description', 'price', 'city_id'];
    public function city()
    {
        return $this->belongsTo('App/City');
    }
}
