<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{

    protected $table = 'buses';
    protected $fillable= [
        'title', 'regNo', 'dName', 'insurance_id', 'validity', 'incharge', 'RTitle'
    ];
    use HasFactory;


public function driver()
{
    return $this->belongsTo(Driver::class, 'dName');
}

public function road()
{
    return $this->belongsTo(Road::class, 'RTitle');
}

public function scopeActive($query)
{
    return $query->where('status', true);
}

public function scopeDeleted($query)
{
    return $query->where('status', false);
}

}