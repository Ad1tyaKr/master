<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Road extends Model
{

    protected $table = 'roads';
    protected $fillable= [
        'RTitle', 'PickUp', 'Destination', 'TimingsS', 'TimingsE'
    ];
    use HasFactory;

    public function roads()
    {
        return $this->hasMany(Bus::class, 'RTitle');
        
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
