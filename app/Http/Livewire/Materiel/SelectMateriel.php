<?php

namespace App\Http\Livewire\Materiel;

use Livewire\Component;
use App\Models\MaterielMatricule;

class SelectMateriel extends Component
{
    public $nbre;
    public $mat;
    public $mark;
    public $genr;
    public $usag;

    public function mount($nbre)
    {
        $this->nbre=MaterielMatricule::distinct()->count('materiel_type_id');
        $this->mat=MaterielMatricule::distinct()->count('matricule');
        $this->mark=MaterielMatricule::distinct()->count('materiel_marque_id');
        $this->genr=MaterielMatricule::distinct()->count('materiel_modele_id');
        $this->usag=MaterielMatricule::distinct()->count('usage');
    }

    public function render()
    {
        return view('livewire.materiel.select-materiel',['nbre']);
    }
}
