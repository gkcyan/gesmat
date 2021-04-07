<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conducteur extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [

        'nom',
        'prenom',
        'sexe',
        'nationalite',
        'matrimoniale',
        'nb_enfant',
        'date_naissance',
        'date_embauche',
        'site_id',
        'conducteur_categorie_id',
        'matricule',
        'cnps',
        'email',
    ];

    public function ConducteurCategorie()
    {
        return $this->belongsTo(ConducteurCategorie::class);
    }

    public function Site()
    {
        return $this->belongsTo(Site::class);
    }
}
