<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{

    protected $table = 'drivers';
    protected $fillable= [
        'dName', 'dId', 'Idproof', 'DphoneNo', 'Demail', 
    ];
    

    use HasFactory;
    public function buses()
{
    return $this->hasMany(Bus::class, 'driver_id');
    
}
}
