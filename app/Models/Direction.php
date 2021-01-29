<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Direction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'libelle',
        'description',
        'email',
        'entreprise_id',
        'site_id'
    ];

    public function entreprises()
    {
        return $this->belongsTo(Entreprise::class);
    }
    
    public function sites()
    {
        return $this->belongsTo(Site::class);
    }
}
