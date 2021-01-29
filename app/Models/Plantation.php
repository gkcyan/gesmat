<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plantation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'libelle',
        'description',
        'localisation',
        'superficie',
        'exploitant',
        'contact',
        'email',
        'entreprise_id',
        'site_id',
        'direction_id',
        'service_id',
        'ge_id'
    ];

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }
    
    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public function direction()
    {
        return $this->belongsTo(Direction::class);
    }

    public function Service()
    {
        return $this->belongsTo(Service::class);
    }
    
    public function Gencadrement()
    {
        return $this->belongsTo(Gencadrement::class);
    }
}
