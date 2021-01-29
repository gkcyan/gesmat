<?php

namespace App\Http\Livewire\Gencadrements;

use App\Models\Gencadrement;
use App\Models\Pbascule;
use App\Models\Service;
use App\Models\Direction;
use App\Models\Site;
use App\Models\Entreprise;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;


class GencadrementsTable extends LivewireDatatable
{
   
    public $FrmCreateGencadrement; //Create form variable
    public $FrmEditGencadrement; //Edit form variable
    public $FrmImpPageGencadrement; //imprime page form 
    public $FrmConsultGencadrement; //Read form variable
    public $hideable = 'select';
    public $exportable = true;
    //public $afterTableSlot = 'components.selected';
    public $libelle, $description, $email, $localisation, $entreprise_id, $site_id, $direction_id, $service_id, $gencadrement_id;
    public $isOpen = 0;
    public $ListeEntreprises;
    public $ListeSites;
    public $ListeDirections;
    public $ListeServices;



     /** open modal function**/
     public function openModal()
     {
         $this->isOpen =true;
     }
   
     /** close modal and initializing formualaire */
     public function closeModal()
     {
         $this->isOpen = false;
         $this->FrmCreateGencadrement=false;
         $this->FrmConsultGencadrement=false;
         $this->FrmEditGencadrement=false;
        // $this->FrmImpPageGencadrement=false;
     }


    //public $model = Direction::class;

    public function builder()
    {
        return Gencadrement::query()
                        ->leftJoin('entreprises','entreprises.id','=','gencadrements.entreprise_id');
                         //->leftJoin('sites','sites.id','=','directions.site_id');
                          //->where('entreprise.id'>2)
                          //->get();
                         
    }

    
    public function columns()
    {
        //
        return [
            //Column::checkbox(),
            //NumberColumn::name('id')->filterable(),//->linkTo('denomination'),
            Column::name('libelle')->label("Gp. Encadrement")->filterable()->searchable(),
            Column::name('description')->filterable()->searchable()->editable(),
            Column::name('email')->label('Email')->filterable(),
            Column::name('localisation')->label('Localisation')->filterable(),
            Column::name('entreprises.nom_commercial')->label('Entreprise')->filterable()->searchable(),
           //Column::name('Sites.libelle')->label('Site')->filterable()->searchable(),
 
            //DateColumn::name('created_at')->label('Enregistrée le')->filterable(),
            //Column::delete()->label('delete')->alignRight(),
            Column::callback(['id', 'libelle'], function ($id, $libelle) {
                return view('livewire.gencadrements.table-action', ['id' => $id, 'libelle' => $libelle]);
            })
           
        ];
    }

    public function create()
    {
        $this->FrmCreateGencadrement=true;
        $this->ListeEntreprises=Entreprise::orderBy('denomination')->get();
        $this->ListeSites=Site::orderBy('libelle')->get();
        $this->ListeDirections=Direction::orderBy('libelle')->get();
        $this->ListeServices=Service::orderBy('libelle')->get();
        $this->resetInputFields();
        $this->openModal();  
    }
  
    /**Read function */
    public function read($id)
    {
        $this->FrmConsultGencadrement=true;
        $gencadrement = Gencadrement::findOrFail($id);
        $this->id = $id;
        $this->libelle=$gencadrement->libelle;
        $this->description=$gencadrement->description;
        $this->email=$gencadrement->email;
        $this->localisation=$gencadrement->localisation;
        $this->entreprise_id=Entreprise::find($gencadrement->entreprise_id)->denomination;
        $this->site_id=Site::find($gencadrement->site_id)->libelle;
        $this->direction_id=Direction::find($gencadrement->direction_id)->libelle;
        $this->service_id=Service::find($gencadrement->service_id)->libelle;
        $this->openModal();
    }

  
  
   /**form initliazing  */
    private function resetInputFields(){
        $this->libelle='';
        $this->description='';
        $this->email='';
        $this->localisation='';
        $this->site_id='';
        $this->entreprise_id='';
        $this->direction_id='';
        $this->service_id='';
        
    }
     
    /** store and Update function */
    public function store()
    {
        $this->validate([
            'libelle' => 'required',// | unique:sites,libelle',
            'entreprise_id' => 'required',
            'direction_id' => 'required',
            'email' => 'required',
        ]);
   
        gencadrement::updateOrCreate(['id' => $this->gencadrement_id], [
            
            'libelle' => $this->libelle,
            'description'=> $this->description,
            'email'=> $this->email,
            'localisation'=> $this->localisation,
            'entreprise_id'=> $this->entreprise_id,
            'site_id'=> $this->site_id,
            'direction_id'=> $this->direction_id,
            'service_id'=> $this->service_id,
            'gencadrement_id'=> $this->gencadrement_id

        ]);
  
        session()->flash('message', $this->gencadrement_id ? 'Le gencadrement "'. $this->libelle .'" a été modifié avec Succès.' : 'Le gencadrement "'. $this->libelle .'"a été Ajouté avec Succès');
  
        $this->closeModal();
        $this->resetInputFields();
       
    }

    /** open edit form with data*/
    public function edit($id)
    {
        $this->FrmEditGencadrement=true;
        $this->ListeEntreprises=Entreprise::orderBy('denomination')->get();
        $this->ListeSites=Site::orderBy('libelle')->get();
        $this->ListeDirections=Direction::orderBy('libelle')->get();
        $gencadrement = gencadrement::findOrFail($id);
        $this->gencadrement_id = $id;
        $this->libelle=$gencadrement->libelle;
        $this->email=$gencadrement->email;
        $this->localisation=$gencadrement->localisation;
        $this->description=$gencadrement->description;
        $this->entreprise_id=$gencadrement->entreprise_id;
        $this->direction_id=$gencadrement->direction_id;
        $this->site_id=$gencadrement->site_id;
        $this->service_id=$gencadrement->service_id;
        $this->openModal();
    }

    /**delete function */
    public function delete($id)
    {
        //$this->openModal();
        gencadrement::find($id)->delete();
        session()->flash('message', 'Le gencadrement'. $this->libelle .' a été supprimé avec Succès');
    }
}