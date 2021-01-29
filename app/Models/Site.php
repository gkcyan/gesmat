<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Site extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'libelle',
        'description',
        'entreprise_id',
    ];

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }

   
    public function directions()
    {
        return $this->hasMany(Direction::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function Pbascules()
    {
        return $this->hasMany(Pbascule::class);
    }
}
