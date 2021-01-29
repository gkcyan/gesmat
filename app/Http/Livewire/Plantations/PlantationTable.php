<?php

namespace App\Http\Livewire\Plantations;


use App\Models\Gencadrement;
use App\Models\Service;
use App\Models\Direction;
use App\Models\Site;
use App\Models\Entreprise;
use App\Models\Plantation;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;

class PlantationTable extends LivewireDatatable
{
    public $FrmCreatePlantation; //Create form variable
    public $FrmEditPlantation; //Edit form variable
    public $FrmImpPagePlantation; //imprime page form 
    public $FrmConsultPlantation; //Read form variable
    public $hideable = 'select';
    public $exportable = true;
    //public $afterTableSlot = 'components.selected';
    public $libelle, $description, $email,$superficie,$exploitant,$contact, $localisation, $entreprise_id, $site_id, $direction_id, $service_id, $ge_id, $plantation_id;
    public $isOpen = 0;
    public $ListeEntreprises;
    public $ListeSites;
    public $ListeDirections;
    public $ListeServices;
    public $ListeGes;



     /** open modal function**/
     public function openModal()
     {
         $this->isOpen =true;
     }
   
     /** close modal and initializing formualaire */
     public function closeModal()
     {
         $this->isOpen = false;
         $this->FrmCreatePlantation=false;
         $this->FrmConsultPlantation=false;
         $this->FrmEditPlantation=false;
        // $this->FrmImpPagePlantation=false;
     }


    //public $model = Direction::class;

    public function builder()
    {
        return Plantation::query()
                        ->leftJoin('gencadrements','gencadrements.id','=','plantations.ge_id');
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
            Column::name('libelle')->label("Plantation")->filterable()->searchable(),
            //Column::name('description')->filterable()->searchable()->editable(),
            Column::name('exploitant')->label('Proprietaire')->filterable(),
            Column::name('contact')->label('Contact')->filterable(),
            Column::name('localisation')->label('Localisation')->filterable(),
            Column::name('gencadrements.libelle')->label('Grp. Encadrement')->filterable()->searchable(),
           //Column::name('Sites.libelle')->label('Site')->filterable()->searchable(),
 
            //DateColumn::name('created_at')->label('Enregistrée le')->filterable(),
            //Column::delete()->label('delete')->alignRight(),
            Column::callback(['id', 'libelle'], function ($id, $libelle) {
                return view('livewire.Plantations.table-action', ['id' => $id, 'libelle' => $libelle]);
            })
           
        ];
    }

    public function create()
    {
        $this->FrmCreatePlantation=true;
        $this->ListeEntreprises=Entreprise::orderBy('denomination')->get();
        $this->ListeSites=Site::orderBy('libelle')->get();
        $this->ListeDirections=Direction::orderBy('libelle')->get();
        $this->ListeServices=Service::orderBy('libelle')->get();
        $this->ListeGes=Gencadrement::orderBy('libelle')->get();
        $this->resetInputFields();
        $this->openModal();  
    }
  
    /**Read function */
    public function read($id)
    {
        $this->FrmConsultPlantation=true;
        $plantation = Plantation::findOrFail($id);
        $this->id = $id;
        $this->libelle=$plantation->libelle;
        $this->description=$plantation->description;
        $this->email=$plantation->email;
        $this->localisation=$plantation->localisation;
        $this->entreprise_id=Entreprise::find($plantation->entreprise_id)->denomination;
        $this->site_id=Site::find($plantation->site_id)->libelle;
        $this->direction_id=Direction::find($plantation->direction_id)->libelle;
        $this->service_id=Service::find($plantation->service_id)->libelle;
        $this->ge_id=Gencadrement::find($plantation->ge_id)->libelle;
        $this->superficie=$plantation->superficie;
        $this->exploitant=$plantation->exploitant;
        $this->contact=$plantation->contact;
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
        $this->ge_id='';
        $this->superficie='';
        $this->exploitant='';
        $this->contact='';
        
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
   
        Plantation::updateOrCreate(['id' => $this->plantation_id], [
            
            'libelle' => $this->libelle,
            'description'=> $this->description,
            'email'=> $this->email,
            'localisation'=> $this->localisation,
            'entreprise_id'=> $this->entreprise_id,
            'site_id'=> $this->site_id,
            'direction_id'=> $this->direction_id,
            'service_id'=> $this->service_id,
            'ge_id'=>$this->ge_id,
            'superficie'=>$this->superficie,
            'exploitant'=>$this->exploitant,
            'contact'=>$this->contact,
            'plantation_id'=> $this->plantation_id,

        ]);
  
        session()->flash('message', $this->plantation_id ? 'La plantation "'. $this->libelle .'" a été modifiée avec Succès.' : 'La plantation "'. $this->libelle .'"a été Ajoutée avec Succès');
  
        $this->closeModal();
        $this->resetInputFields();
       
    }

    /** open edit form with data*/
    public function edit($id)
    {
        $this->FrmEditPlantation=true;
        $this->ListeEntreprises=Entreprise::orderBy('denomination')->get();
        $this->ListeSites=Site::orderBy('libelle')->get();
        $this->ListeDirections=Direction::orderBy('libelle')->get();
        $plantation = Plantation::findOrFail($id);
        $this->plantation_id = $id;
        $this->libelle=$plantation->libelle;
        $this->email=$plantation->email;
        $this->localisation=$plantation->localisation;
        $this->description=$plantation->description;
        $this->entreprise_id=$plantation->entreprise_id;
        $this->direction_id=$plantation->direction_id;
        $this->site_id=$plantation->site_id;
        $this->service_id=$plantation->service_id;
        $this->ge_id=$plantation->ge_id;
        $this->superficie=$plantation->superficie;
        $this->exploitant=$plantation->exploitant;
        $this->contact=$plantation->contact;
        $this->openModal();
    }

    /**delete function */
    public function delete($id)
    {
        //$this->openModal();
        Plantation::find($id)->delete();
        session()->flash('message', 'La plantation'. $this->libelle .' a été supprimée avec Succès');
    }
}