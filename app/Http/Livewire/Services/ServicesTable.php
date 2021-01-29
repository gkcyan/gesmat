<?php

namespace App\Http\Livewire\Services;

use App\Models\Service;
use App\Models\Direction;
use App\Models\Site;
use App\Models\Entreprise;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;


class ServicesTable extends LivewireDatatable
{
   
    
    public $FrmCreateService; //Create form variable
    public $FrmEditService; //Edit form variable
    public $FrmImpPageService; //imprime page form 
    public $FrmConsultService; //Read form variable
    public $hideable = 'select';
    public $exportable = true;
    //public $afterTableSlot = 'components.selected';
    public $libelle, $description, $email, $entreprise_id, $site_id, $direction_id, $service_id;
    public $isOpen = 0;
    public $ListeEntreprises;
    public $ListeSites;
    public $ListeDirections;


    /*public function mount($ListeEntreprises, $ListeSites)
    {
        $this->ListeSites=$ListeSites;
        $this->ListeEntreprises=$ListeEntreprises;
    }*/

     /** open modal function**/
     public function openModal()
     {
         $this->isOpen =true;
     }
   
     /** close modal and initializing formualaire */
     public function closeModal()
     {
         $this->isOpen = false;
         $this->FrmCreateService=false;
         $this->FrmConsultService=false;
         $this->FrmEditService=false;
     }


    //public $model = Direction::class;

    public function builder()
    {
        return Service::query();
                        //->leftJoin('entreprises','entreprises.id','=','directions.entreprise_id');
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
            Column::name('libelle')->label('Direction')->filterable()->searchable(),
            Column::name('description')->filterable()->searchable()->editable(),
            Column::name('email')->label('Responsable')->filterable(),
            //Column::name('entreprises.nom_commercial')->label('Entreprise')->filterable()->searchable(),
           //Column::name('Sites.libelle')->label('Site')->filterable()->searchable(),
 
            DateColumn::name('created_at')->label('Enregistrée le')->filterable(),
            //Column::delete()->label('delete')->alignRight(),
            Column::callback(['id', 'libelle'], function ($id, $libelle) {
                return view('livewire.services.table-action', ['id' => $id, 'libelle' => $libelle]);
            })
           
        ];
    }

    public function create()
    {
        $this->FrmCreateService=true;
        $this->ListeEntreprises=Entreprise::orderBy('denomination')->get();
        $this->ListeSites=Site::orderBy('libelle')->get();
        $this->ListeDirections=Direction::orderBy('libelle')->get();
        $this->resetInputFields();
        $this->openModal();  
       
    }
  
    /**Read function */
    public function read($id)
    {
        $this->FrmConsultService=true;
       $service = Service::findOrFail($id);
        //$site=entreprise::has('sites')->findOrFail($id);
        $this->id = $id;
        $this->libelle=$service->libelle;
        $this->description=$service->description;
        $this->email=$service->email;
        $this->entreprise_id=Entreprise::find($service->entreprise_id)->denomination;
        $this->site_id=Site::find($service->site_id)->libelle;
        $this->direction_id=Direction::find($service->direction_id)->libelle;
        $this->openModal();

        
    }

  
  
   /**form initliazing  */
    private function resetInputFields(){
        $this->libelle='';
        $this->description='';
        $this->email='';
        $this->site_id='';
        $this->entreprise_id='';
        $this->direction_id='';
        
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
   
        Service::updateOrCreate(['id' => $this->service_id], [
            
            'libelle' => $this->libelle,
            'description'=> $this->description,
            'email'=> $this->email,
            'entreprise_id'=> $this->entreprise_id,
            'site_id'=> $this->site_id,
            'direction_id'=> $this->direction_id,
            'service_id'=> $this->service_id
        ]);
  
        session()->flash('message', $this->service_id ? 'Le service "'. $this->libelle .'" a été modifié avec Succès.' : 'Le service "'. $this->libelle .'"a été Ajouté avec Succès');
  
        $this->closeModal();
        $this->resetInputFields();
       
    }

    /** open edit form with data*/
    public function edit($id)
    {
        $this->FrmEditService=true;
        $this->ListeEntreprises=Entreprise::orderBy('denomination')->get();
        $this->ListeSites=Site::orderBy('libelle')->get();
        $this->ListeDirections=Direction::orderBy('libelle')->get();
        $service = Service::findOrFail($id);
        $this->service_id = $id;
        $this->libelle=$service->libelle;
        $this->email=$service->email;
        $this->description=$service->description;
        $this->entreprise_id=$service->entreprise_id;
        $this->direction_id=$service->direction_id;
        $this->site_id=$service->site_id;
        $this->openModal();
    }

    /**delete function */
    public function delete($id)
    {
        //$this->openModal();
        Service::find($id)->delete();
        session()->flash('message', 'Le service'. $this->libelle .' a été supprimé avec Succès');
    }
}