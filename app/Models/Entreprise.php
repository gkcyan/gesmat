<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entreprise extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'denomination',
        'nom_commercial',
        'sigle',
        'rcm',
        'ncc',
        'adresse',
        'forme_juridique',
        'capital',
        'image',
        'actif',
        //'id',
    ];

    public function Prestations()
    {
        return $this->belongsTo(EntreprisePrestation::class);
    }

    public function Sites()
    {
        return $this->hasMany(Site::class);
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
