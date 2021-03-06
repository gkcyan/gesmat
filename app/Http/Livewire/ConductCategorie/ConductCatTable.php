<?php

namespace App\Http\Livewire\ConductCategorie;

use  App\Models\ConducteurCategorie;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;

class ConductCatTable extends LivewireDatatable
{
    
     
    public $FrmCreateConducteurCategorie; //Create form variable
    public $FrmEditConducteurCategorie; //Edit form variable
    public $FrmImpPageConducteurCategorie; //imprime page form 
    public $FrmConsultConducteurCategorie; //Read form variable
    public $hideable = 'select';
    public $exportable = true;
    //public $afterTableSlot = 'components.selected';
    public $libelle, $description,$categorie_id;
    public $isOpen = 0;
    



     /** open modal function**/
     public function openModal()
     {
         $this->isOpen =true;
     }
   
     /** close modal and initializing formualaire */
     public function closeModal()
     {
         $this->isOpen = false;
         $this->FrmCreateConducteurCategorie=false;
         $this->FrmConsultConducteurCategorie=false;
         $this->FrmEditConducteurCategorie=false;
        // $this->FrmImpPageConducteurCategorie=false;
     }


    //public $model = Direction::class;

    public function builder()
    {
        return ConducteurCategorie::query();
                      
                         
    }

    
    public function columns()
    {
        //
        return [
            //Column::checkbox(),
            Column::name('libelle')->label('Categorie')->filterable()->searchable(),
            Column::name('description')->label('Description')->filterable(),
           
          
            Column::callback(['id', 'libelle'], function ($id, $libelle) {
                return view('livewire.mat-categorie.table-action', ['id' => $id, 'libelle' => $libelle]);
            })
           
        ];
    }

    public function create()
    {
        $this->FrmCreateConducteurCategorie=true;
        $this->resetInputFields();
        $this->openModal();  
    }
  
    /**Read function */
    public function read($id)
    {
        $this->FrmConsultConducteurCategorie=true;
        $marque = ConducteurCategorie::findOrFail($id);
        $this->id = $id;
        $this->libelle=$marque->libelle;
        $this->description=$marque->description;
        $this->openModal();
    }

  
  
   /**form initliazing  */
    private function resetInputFields(){
        $this->libelle='';
        $this->description='';
      
      
        
    }
     
    /** store and Update function */
    public function store()
    {
        $this->validate([
            'libelle' => 'required',// | unique:sites,libelle',
            
        ]);
        ConducteurCategorie::updateOrCreate(['id' => $this->categorie_id], [
            
            'libelle' => $this->libelle,
            'description'=> $this->description,
        ]);
  
        session()->flash('message', $this->categorie_id ? 'La cat??gorie "'. $this->libelle .'" a ??t?? modifi??e avec Succ??s.' : 'La cat??gorie "'. $this->libelle .'"a ??t?? Ajout??e avec Succ??s');
  
        $this->closeModal();
        $this->resetInputFields();
       
    }

    /** open edit form with data*/
    public function edit($id)
    {
        $this->FrmEditConducteurCategorie=true;
        $marque = ConducteurCategorie::findOrFail($id);
        $this->categorie_id = $id;
        $this->libelle=$marque->libelle;
        $this->description=$marque->description;
      
        $this->openModal();
    }

    /**delete function */
    public function delete($id)
    {
        //$this->openModal();
        ConducteurCategorie::find($id)->delete();
        session()->flash('message', 'La cat??gorie'. $this->libelle .' a ??t?? supprim??e avec Succ??s');
    }
}