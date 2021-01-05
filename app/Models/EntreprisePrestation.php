<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntreprisePrestation extends Model
{
    use HasFactory;

    protected $fillable = [
        'prestation',
        'entreprise_id',
    ];

    public function entreprises()
    {
        return $this->hasMany(Entreprise::class);
    }
}
