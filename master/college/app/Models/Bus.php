<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{

    protected $table = 'buses';
    protected $fillable= [
        'title', 'regNo', 'driver_id', 'insurance_id', 'validity', 'incharge', 'road_id'
    ];
    use HasFactory;


public function driver()
{
    return $this->belongsTo(Driver::class, 'driver_id');
}

public function road()
{
    return $this->belongsTo(Road::class, 'road_id');
}


}