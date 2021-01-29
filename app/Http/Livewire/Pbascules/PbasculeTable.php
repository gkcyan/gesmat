<?php

namespace App\Http\Livewire\Pbascules;


use App\Models\Pbascule;
use App\Models\Service;
use App\Models\Direction;
use App\Models\Site;
use App\Models\Entreprise;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;


class PbasculeTable extends LivewireDatatable
{
   
    public $FrmCreatePbascule; //Create form variable
    public $FrmEditPbascule; //Edit form variable
    public $FrmImpPagePbascule; //imprime page form 
    public $FrmConsultPbascule; //Read form variable
    public $hideable = 'select';
    public $exportable = true;
    //public $afterTableSlot = 'components.selected';
    public $libelle, $description, $email, $localisation, $entreprise_id, $site_id, $direction_id, $service_id, $pbascule_id;
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
         $this->FrmCreatePbascule=false;
         $this->FrmConsultPbascule=false;
         $this->FrmEditPbascule=false;
     }


    //public $model = Direction::class;

    public function builder()
    {
        return Pbascule::query()
                        ->leftJoin('entreprises','entreprises.id','=','pbascules.entreprise_id');
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
            Column::name('libelle')->label('Pont Bascule')->filterable()->searchable(),
            Column::name('description')->filterable()->searchable()->editable(),
            Column::name('email')->label('Responsable')->filterable(),
            Column::name('localisation')->label('Zone')->filterable(),
            Column::name('entreprises.nom_commercial')->label('Entreprise')->filterable()->searchable(),
           //Column::name('Sites.libelle')->label('Site')->filterable()->searchable(),
 
            //DateColumn::name('created_at')->label('Enregistrée le')->filterable(),
            //Column::delete()->label('delete')->alignRight(),
            Column::callback(['id', 'libelle'], function ($id, $libelle) {
                return view('livewire.Pbascules.table-action', ['id' => $id, 'libelle' => $libelle]);
            })
           
        ];
    }

    public function create()
    {
        $this->FrmCreatePbascule=true;
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
        $this->FrmConsultPbascule=true;
        $pbascule = Pbascule::findOrFail($id);
        $this->id = $id;
        $this->libelle=$pbascule->libelle;
        $this->description=$pbascule->description;
        $this->email=$pbascule->email;
        $this->localisation=$pbascule->localisation;
        $this->entreprise_id=Entreprise::find($pbascule->entreprise_id)->denomination;
        $this->site_id=Site::find($pbascule->site_id)->libelle;
        $this->direction_id=Direction::find($pbascule->direction_id)->libelle;
        $this->service_id=Service::find($pbascule->service_id)->libelle;
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
   
        Pbascule::updateOrCreate(['id' => $this->pbascule_id], [
            
            'libelle' => $this->libelle,
            'description'=> $this->description,
            'email'=> $this->email,
            'localisation'=> $this->localisation,
            'entreprise_id'=> $this->entreprise_id,
            'site_id'=> $this->site_id,
            'direction_id'=> $this->direction_id,
            'service_id'=> $this->service_id,
            'pbascule_id'=> $this->pbascule_id

        ]);
  
        session()->flash('message', $this->pbascule_id ? 'Le Pbascule "'. $this->libelle .'" a été modifié avec Succès.' : 'Le Pbascule "'. $this->libelle .'"a été Ajouté avec Succès');
  
        $this->closeModal();
        $this->resetInputFields();
       
    }

    /** open edit form with data*/
    public function edit($id)
    {
        $this->FrmEditPbascule=true;
        $this->ListeEntreprises=Entreprise::orderBy('denomination')->get();
        $this->ListeSites=Site::orderBy('libelle')->get();
        $this->ListeDirections=Direction::orderBy('libelle')->get();
        $pbascule = Pbascule::findOrFail($id);
        $this->pbascule_id = $id;
        $this->libelle=$pbascule->libelle;
        $this->email=$pbascule->email;
        $this->localisation=$pbascule->localisation;
        $this->description=$pbascule->description;
        $this->entreprise_id=$pbascule->entreprise_id;
        $this->direction_id=$pbascule->direction_id;
        $this->site_id=$pbascule->site_id;
        $this->service_id=$pbascule->service_id;
        $this->openModal();
    }

    /**delete function */
    public function delete($id)
    {
        //$this->openModal();
        Pbascule::find($id)->delete();
        session()->flash('message', 'Le Pbascule'. $this->libelle .' a été supprimé avec Succès');
    }
}