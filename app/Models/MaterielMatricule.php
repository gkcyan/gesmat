<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MaterielMatricule extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'matricule',
        'num_carte_grise',
        'propietraire',
        'materiel_marque_id',
        'materiel_type_id',
        'materiel_modele_id',
        'couleur',
        'carosserie',
        'carb_produit_id',
        'place_assise',
        'ptac',
        'pv',
        'cu',
        'usage',
        'puissance_fiscale',
        'essieu',
        'cylindre',
        'date_premiere_mc',
        'date_edition',
        'actif',
        'entreprise_type',
        'chassis',
        'societe_credit',
        'date_contrat_credit',
        'main_leve_gage',
    ];

    public function MaterielMarque()
    {
        return $this->belongsTo(MaterielMarque::class);
    }

    public function MaterielType()
    {
        return $this->belongsTo(MaterielType::class);
    }

    public function MaterielModele()
    {
        return $this->belongsTo(MaterielModele::class);
    }

    public function CarbProduit()
    {
        return $this->belongsTo(CarbProduit::class);
    }
}
