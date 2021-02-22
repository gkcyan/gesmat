<?php

namespace App\Http\Livewire;

use App\Models\Direction;
use App\Models\Site;
use App\Models\Entreprise;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;

class DirectionsTable extends LivewireDatatable
{
    //public $model = Direction::class;

    
    
    
    public $FrmCreateDirection; //Create form variable
    public $FrmEditDirection; //Edit form variable
    public $FrmImpPageDirection; //imprime page form 
    public $FrmConsultDirection; //Read form variable
    public $hideable = 'select';
    public $exportable = true;
    //public $afterTableSlot = 'components.selected';
    public $libelle, $description, $email, $entreprise_id, $site_id, $direction_id;
    public $isOpen = 0;
    public $ListeEntreprises;
    public $ListeSites;
    public $ListeSitesTout;


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
         $this->FrmCreateDirection=false;
         $this->FrmConsultDirection=false;
         $this->FrmEditDirection=false;
     }


    //public $model = Direction::class;

    public function builder()
    {
        return Direction::query()
                        ->leftJoin('entreprises','entreprises.id','=','directions.entreprise_id');
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
            Column::name('email')->label('Email')->filterable(),
            Column::name('entreprises.nom_commercial')->label('Entreprise')->filterable()->searchable(),
           //Column::name('Sites.libelle')->label('Site')->filterable()->searchable(),
 
            DateColumn::name('created_at')->label('Enregistrée le')->filterable(),
            //Column::delete()->label('delete')->alignRight(),
            Column::callback(['id', 'libelle'], function ($id, $libelle) {
                return view('livewire.direction.table-action', ['id' => $id, 'libelle' => $libelle]);
            })
           
        ];
    }

    public function create()
    {
        $this->FrmCreateDirection=true;
        $this->ListeEntreprises=Entreprise::orderBy('denomination')->get();
        $this->ListeSites=Site::orderBy('libelle')->get();
        $this->resetInputFields();
        $this->openModal();  
       
    }
  
    /**Read function */
    public function read($id)
    {
        $this->FrmConsultDirection=true;
       $direction = Direction::findOrFail($id);
        //$site=entreprise::has('sites')->findOrFail($id);
        $this->id = $id;
        $this->libelle=$direction->libelle;
        $this->description=$direction->description;
        $this->email=$direction->email;
        $this->entreprise_id=Entreprise::find($direction->entreprise_id)->denomination;
        $this->site_id=Site::find($direction->site_id)->libelle;
        //dd($id);
        $this->openModal();

        //return view('livewire.read');
    }

  
  
   /**form initliazing  */
    private function resetInputFields(){
        $this->libelle='';
        $this->description='';
        $this->email='';
        $this->site_id='';
        $this->entreprise_id='';
        
    }
     
    /** store and Update function */
    public function store()
    {
        $this->validate([
            'libelle' => 'required',// | unique:sites,libelle',
            'entreprise_id' => 'required',
            'email' => 'required',
        ]);
   
        Direction::updateOrCreate(['id' => $this->direction_id], [
            
            'libelle' => $this->libelle,
            'description'=> $this->description,
            'email'=> $this->email,
            'entreprise_id'=> $this->entreprise_id,
            'site_id'=> $this->site_id,
            'direction_id'=> $this->direction_id
        ]);
  
        session()->flash('message', $this->direction_id ? 'La direction "'. $this->libelle .'" Modifiée avec Succès.' : 'La direction "'. $this->libelle .'"a été Ajouté avec Succès');
  
        $this->closeModal();
        $this->resetInputFields();
       
    }

    /** open edit form with data*/
    public function edit($id)
    {
        $this->FrmEditDirection=true;
        $this->ListeEntreprises=Entreprise::orderBy('denomination')->get();
        $this->ListeSites=Site::orderBy('libelle')->get();
        $direction = Direction::findOrFail($id);
        $this->direction_id = $id;
        $this->libelle=$direction->libelle;
        $this->email=$direction->email;
        $this->description=$direction->description;
        $this->entreprise_id=$direction->entreprise_id;
        $this->site_id=$direction->site_id;
        $this->openModal();
    }

    /**delete function */
    public function delete($id)
    {
        //$this->openModal();
        Direction::find($id)->delete();
        session()->flash('message', 'La direction'. $this->libelle .' a été supprimé avec Succès');
    }
}