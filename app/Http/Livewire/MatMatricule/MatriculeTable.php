<?php

namespace App\Http\Livewire\MatMatricule;

use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;

use App\Models\CarbProduit;
use App\Models\MaterielMarque;
use App\Models\MaterielMatricule;
use App\Models\MaterielModele;
use App\Models\MaterielType;

class MatriculeTable extends LivewireDatatable
{

    public $FrmCreateMaterielMatricule; //Create form variable
    public $FrmConsultMaterielMatricule; //Read form variable
    public $FrmImpPageMaterielMatricule; //imprime page form 
    public $FrmEditMaterielMatricule; //Edit form variable
    public $hideable = 'select';
    public $exportable = true;
    //public $afterTableSlot = 'components.selected';
    public $matricule, $num_carte_grise, $propietraire, $materiel_marque_id, $materiel_type_id,
        $materiel_modele_id, $couleur, $carosserie, $carb_produit_id, $place_assise, $ptac, $pv,
        $cu, $puissance_fiscale, $usage, $actif, $entreprise_type, $essieu, $cylindre, $date_premiere_mc,
        $date_edition, $chassis, $societe_credit, $date_contrat_credit, $main_leve_gage, $matricule_id;

    public $isOpen = 0;

    public $ListeMaterielMarques;
    public $ListeMaterielTypes;
    public $ListeMaterielModeles;
    public $ListeCarbProduits;

    

    public function index()
    {

        return view('livewire.Mat-matricule.index');
    }


    /** open modal function**/
    public function openModal()
    {
        $this->isOpen = true;
    }

    /** close modal and initializing formualaire */
    public function closeModal()
    {
        $this->isOpen = false;
        $this->FrmCreateMaterielMatricule = false;
        $this->FrmConsultMaterielMatricule = false;
        $this->FrmEditMaterielMatricule = false;
        // $this->FrmImpPageMaterielMatricule=false;
    }


    //public $model = Direction::class;

    public function builder()
    {
        return MaterielMatricule::query();
    }


    public function columns()
    {
        //
        return [
            //Column::checkbox(),
            Column::name('MaterielMarque.libelle')->label('Marque')->filterable(),
            Column::name('matricule')->label('Matricule')->filterable()->searchable(),
            Column::name('MaterielModele.libelle')->label('Modele')->filterable()->searchable(),
            Column::name('chassis')->label('Chassis')->filterable(),
            Column::name('propietraire')->label('Proprietaire')->filterable(),



            Column::callback(['id', 'carosserie'], function ($id, $carosserie) {
                return view('livewire.mat-matricule.table-action', ['id' => $id, 'carosserie' => $carosserie]);
            })

        ];
    }




    public function create()
    {
        $this->FrmCreateMaterielMatricule = true;
        $this->ListeMaterielMarques = MaterielMarque::orderBy('libelle')->get();
        $this->ListeMaterielTypes = MaterielType::orderBy('libelle')->get();
        $this->ListeMaterielModeles = MaterielModele::orderBy('libelle')->get();
        $this->ListeCarbProduits = CarbProduit::orderBy('libelle')->get();

        $this->resetInputFields();
        $this->openModal();
    }

    /**Read function */
    public function read($id)
    {
        $this->FrmConsultMaterielMatricule = true;
        // $this->ListeMaterielMarques=MaterielMarque::orderBy('libelle')->get();
        $matricule = MaterielMatricule::findOrFail($id);


        //dd($this->materiel_marque_id);
        $this->matricule = $matricule->matricule;
        $this->num_carte_grise = $matricule->num_carte_grise;
        $this->propietraire = $matricule->propietraire;
        $this->materiel_marque_id = MaterielMarque::find($matricule->materiel_marque_id)->libelle;
        $this->materiel_type_id = MaterielType::find($matricule->materiel_type_id)->libelle;
        $this->materiel_modele_id = MaterielModele::find($matricule->materiel_modele_id)->libelle;
        $this->couleur = $matricule->couleur;
        $this->carosserie = $matricule->carosserie;
        $this->carb_produit_id = CarbProduit::find($matricule->carb_produit_id)->libelle;
        $this->place_assise = $matricule->place_assise;
        $this->ptac = $matricule->ptac;
        $this->pv = $matricule->pv;
        $this->cu = $matricule->cu;
        $this->usage = $matricule->usage;
        $this->puissance_fiscale = $matricule->puissance_fiscale;
        $this->essieu = $matricule->essieu;
        $this->cylindre = $matricule->cylindre;
        $this->date_premiere_mc = $matricule->date_premiere_mc;
        $this->date_edition = $matricule->date_edition;
        //$this->matricule_id =$matricule->matricule_id;
        $this->chassis = $matricule->chassis;
        $this->societe_credit = $matricule->societe_credit;
        $this->date_contrat_credit = $matricule->date_contrat_credit;
        $this->main_leve_gage = $matricule->main_leve_gage;
        $this->actif = $matricule->actif;
        $this->entreprise_type = $matricule->entreprise_type;

        $this->openModal();
    }



    /**form initliazing  */
    private function resetInputFields()
    {

        $this->matricule = '';
        $this->num_carte_grise = '';
        $this->propietraire = '';
        $this->materiel_marque_id = '';
        $this->materiel_type_id = '';
        $this->materiel_modele_id = '';
        $this->couleur = '';
        $this->carosserie = '';
        $this->carb_produit_id = '';
        $this->place_assise = '';
        $this->ptac = '';
        $this->pv = '';
        $this->cu = '';
        $this->usage = '';
        $this->puissance_fiscale = '';
        $this->essieu = '';
        $this->cylindre = '';
        $this->date_premiere_mc = '';
        $this->date_edition = '';
        //$this->matricule_id ='';
        $this->actif = '';
        $this->entreprise_type = '';
        $this->chassis = '';
        $this->societe_credit = '';
        $this->date_contrat_credit = '';
        $this->main_leve_gage = '';
    }

    /** store and Update function */
    public function store()
    {
        $this->validate([
            'matricule' => ['required', 'max:8', ($this->matricule_id) ? '' : 'unique:materiel_matricules'],
            'chassis' => ['required', ($this->matricule_id) ? '' : 'unique:materiel_matricules'],
            'num_carte_grise' => ['required', ($this->matricule_id) ? '' : 'unique:materiel_matricules'],
            'materiel_marque_id' => 'required', // | unique:sites,libelle',
            'materiel_modele_id' => 'required', // | unique:sites,libelle',
            'carb_produit_id' => 'required', // | unique:sites,libelle',
            'materiel_type_id' => 'required', // | unique:sites,libelle',
            'cu' => 'required', // | unique:sites,libelle',
            'usage' => 'required', // | unique:sites,libelle',
            'propietraire' => 'required', // | unique:sites,libelle',
        ]);

        MaterielMatricule::updateOrCreate(['id' => $this->matricule_id], [

            'matricule' => $this->matricule,
            'num_carte_grise' => $this->num_carte_grise,
            'propietraire' => $this->propietraire,
            'materiel_marque_id' => $this->materiel_marque_id,
            'materiel_type_id' => $this->materiel_type_id,
            'materiel_modele_id' => $this->materiel_modele_id,
            'couleur' => $this->couleur,
            'carosserie' => $this->carosserie,
            'carb_produit_id' => $this->carb_produit_id,
            'place_assise' => $this->place_assise,
            'ptac' => $this->ptac,
            'pv' => $this->pv,
            'cu' => $this->cu,
            'usage' => $this->usage,
            'puissance_fiscale' => $this->puissance_fiscale,
            'essieu' => $this->essieu,
            'cylindre' => $this->cylindre,
            'chassis' => $this->chassis,
            'societe_credit' => $this->societe_credit,
            // 'date_contrat_credit'=>$this->date_contrat_credit,
            'main_leve_gage' => $this->main_leve_gage,
            'date_premiere_mc' => $this->date_premiere_mc,
            'date_edition' => $this->date_edition,
            //'matricule_id'=>$this->matricule_id,
            //'actif'=>$this->actif,
            //'entreprise_type'=>$this->entreprise_type,
        ]);

        session()->flash('message', $this->matricule_id ? 'Le materiel "' . $this->matricule . '" a été modifié avec Succès.' : 'Le matériel "' . $this->matricule . '"a été Ajoutée avec Succès');
        $this->closeModal();
        $this->resetInputFields();
    }

    /** open edit form with data*/
    public function edit($id)
    {
        $this->FrmEditMaterielMatricule = true;
        $this->ListeMaterielMarques = MaterielMarque::orderBy('libelle')->get();
        $this->ListeMaterielTypes = MaterielType::orderBy('libelle')->get();
        $this->ListeMaterielModeles = MaterielModele::orderBy('libelle')->get();
        $this->ListeCarbProduits = CarbProduit::orderBy('libelle')->get();

        $matricule = MaterielMatricule::findOrFail($id);

        $this->matricule_id = $id;
        $this->matricule = $matricule->matricule;
        $this->num_carte_grise = $matricule->num_carte_grise;
        $this->propietraire = $matricule->propietraire;
        $this->materiel_marque_id = $matricule->materiel_marque_id;
        $this->materiel_type_id = $matricule->materiel_type_id;
        $this->materiel_modele_id = $matricule->materiel_modele_id;
        $this->couleur = $matricule->couleur;
        $this->carosserie = $matricule->carosserie;
        $this->carb_produit_id = $matricule->carb_produit_id;
        $this->place_assise = $matricule->place_assise;
        $this->ptac = $matricule->ptac;
        $this->pv = $matricule->pv;
        $this->cu = $matricule->cu;
        $this->usage = $matricule->usage;
        $this->puissance_fiscale = $matricule->puissance_fiscale;
        $this->essieu = $matricule->essieu;
        $this->cylindre = $matricule->cylindre;
        $this->date_premiere_mc = $matricule->date_premiere_mc;
        $this->date_edition = $matricule->date_edition;

        $this->chassis = $matricule->chassis;
        $this->societe_credit = $matricule->societe_credit;
        $this->date_contrat_credit = $matricule->date_contrat_credit;
        $this->main_leve_gage = $matricule->main_leve_gage;

        $this->actif = $matricule->actif;
        $this->entreprise_type = $matricule->entreprise_type;

        $this->openModal();
    }

    /**delete function */
    public function delete($id)
    {
        //$this->openModal();
        MaterielMatricule::find($id)->delete();
        session()->flash('message', 'Le materiel' . $this->matricule . ' a été supprimé avec Succès');
    }
}
