<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MaterielMarque extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'libelle',
        'description',
    ];

    //protected $table = 'materiel_marques';
}
