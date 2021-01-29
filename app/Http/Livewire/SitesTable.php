<?php

namespace App\Http\Livewire;

use App\Models\Site;
use App\Models\Entreprise;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;

class SitesTable extends LivewireDatatable
{
    
    public $FrmCreateSite; //Create form variable
    public $FrmEditSite; //Edit form variable
    public $FrmImpPageSite; //imprime page form 
    public $FrmConsultSite; //Read form variable
    public $hideable = 'select';
    public $exportable = true;
    //public $afterTableSlot = 'components.selected';
    public $libelle, $description,$entreprise_id,$site_id;
    public $isOpen = 0;
    public $ListeEntreprises;



     /** open modal function**/
     public function openModal()
     {
         $this->isOpen =true;
     }
   
     /** close modal and initializing formualaire */
     public function closeModal()
     {
         $this->isOpen = false;
         $this->FrmCreateSite=false;
         $this->FrmConsultSite=false;
         $this->FrmEditSite=false;
     }


    //public $model = Site::class;

    public function builder()
    {
        return Site::query()
                        ->leftJoin('entreprises','entreprises.id','sites.entreprise_id');
                          //->where('entreprise.id'>2)
                          //->get();
    }

    public function columns()
    {
        //
        return [
            //Column::checkbox(),
            //NumberColumn::name('id')->filterable(),//->linkTo('denomination'),
            Column::name('libelle')->label('Site')->filterable()->searchable(),
            Column::name('description')->filterable()->searchable()->editable(),
            Column::name('entreprises.nom_commercial')->label('Entreprise')->filterable()->searchable(),
            DateColumn::name('created_at')->label('Enregistrée le')->filterable(),
            //Column::delete()->label('delete')->alignRight(),
            Column::callback(['id', 'libelle'], function ($id, $libelle) {
                return view('table-action', ['id' => $id, 'libelle' => $libelle]);
            })
           
        ];
    }

    public function create()
    {
        $this->FrmCreateSite=true;
        $this->ListeEntreprises=Entreprise::orderBy('denomination')->get();
        $this->resetInputFields();
        $this->openModal();
    }
  
    /**Read function */
    public function read($id)
    {
        $this->FrmConsultSite=true;
       $site = Site::findOrFail($id);
        //$site=entreprise::has('sites')->findOrFail($id);
        $this->id = $id;
        $this->libelle=$site->libelle;
        $this->description=$site->description;
        $this->entreprise_id=Entreprise::find($site->entreprise_id)->denomination;
        //dd($id);
        $this->openModal();

        //return view('livewire.read');
    }

    
  
   /**form initliazing  */
    private function resetInputFields(){
        $this->libelle='';
        $this->description='';
        $this->entreprise_id='';
        
    }
     
    /** store and Update function */
    public function store()
    {
        $this->validate([
            'libelle' => 'required',// | unique:sites,libelle',
            'entreprise_id' => 'required',
        ]);
   
        site::updateOrCreate(['id' => $this->site_id], [
            
            'libelle' => $this->libelle,
            'description'=> $this->description,
            'entreprise_id'=> $this->entreprise_id,
            'site_id'=> $this->site_id
        ]);
  
        session()->flash('message', 
            $this->site_id ? 'Site Modifié avec Succès.' : 'Site Ajouté avec Succès.');
  
        $this->closeModal();
        $this->resetInputFields();
       
    }

    /** open edit form with data*/
    public function edit($id)
    {
        $this->FrmEditSite=true;
        $this->ListeEntreprises=Entreprise::orderBy('denomination')->get();
        $site = Site::findOrFail($id);
        $this->site_id = $id;
        $this->libelle=$site->libelle;
        $this->description=$site->description;
        $this->entreprise_id=$site->entreprise_id;
        $this->openModal();
    }

    /**delete function */
    public function delete($id)
    {
        //$this->openModal();
        site::find($id)->delete();
        session()->flash('message', 'Site Supprimé avec succès.');
    }

}