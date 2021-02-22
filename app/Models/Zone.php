<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Zone extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'libelle',
        'description',
        'longitude',
        'latitude',
        'type',
    ];

  
   
    public function plantations()
    {
        return $this->hasMany(plantations::class);
    }

    public function Gencadrement()
    {
        return $this->belongsTo(Gencadrement::class);
    }
    
}
