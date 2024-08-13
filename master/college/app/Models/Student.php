<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable= [
        'stdId', 'stdName', 'branch', 'phoneNo', 'email', 'address'
    ];
    
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function scopeDeleted($query)
    {
        return $query->where('status', false);
    }
    use HasFactory;

}
