<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarbProduit extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'libelle',
        'description',
        'carb_categorie_id',
        
    ];

    public function CarbCategorie()
    {
        return $this->belongsTo(CarbCategorie::class);
    }
}
