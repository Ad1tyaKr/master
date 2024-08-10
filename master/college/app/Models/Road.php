<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Road extends Model
{

    protected $table = 'roads';
    protected $fillable= [
        'Title', 'PickUp', 'Destination', 'Timings'
    ];
    use HasFactory;

    public function roads()
    {
        return $this->hasMany(Bus::class, 'road_id');
        
    }


}
