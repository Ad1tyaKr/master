<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{

    protected $table = 'drivers';
    protected $fillable= [
        'dName', 'Idproof', 'dId', 'upload', 'DphoneNo', 'Demail', 
    ];
    

    use HasFactory;
    public function buses()
{
    return $this->hasMany(Bus::class, 'dName');
    
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
