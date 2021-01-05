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
    ];

    public function Prestations()
    {
        return $this->belongsTo(EntreprisePrestation::class);
    }
}
