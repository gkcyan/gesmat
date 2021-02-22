<?php

namespace App\Http\Livewire\MatType;

use App\Models\MaterielType;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class TypeTable extends LivewireDatatable
{
    public $FrmCreate; //Create form variable
    public $FrmEdit; //Edit form variable
    public $FrmImpPage; //imprime page form 
    public $FrmConsult; //Read form variable
    public $hideable = 'select';
    public $exportable = true;
    //public $afterTableSlot = 'components.selected';
    public $libelle, $description,$type_id;
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
         $this->FrmCreate=false;
         $this->FrmConsult=false;
         $this->FrmEdit=false;
        // $this->FrmImpPage=false;
     }


    //public $model = Direction::class;

    public function builder()
    {
        return MaterielType::query();
                      
                         
    }

    
    public function columns()
    {
        //
        return [
            //Column::checkbox(),
            Column::name('libelle')->label('Type')->filterable()->searchable(),
            Column::name('description')->label('description')->filterable(),
           
          
            Column::callback(['id', 'libelle'], function ($id, $libelle) {
                return view('livewire.mat-type.table-action', ['id' => $id, 'libelle' => $libelle]);
            })
           
        ];
    }

    public function create()
    {
        $this->FrmCreate=true;
        $this->resetInputFields();
        $this->openModal();  
    }
  
    /**Read function */
    public function read($id)
    {
        $this->FrmConsult=true;
        $type = MaterielType::findOrFail($id);
        $this->id = $id;
        $this->libelle=$type->libelle;
        $this->description=$type->description;
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
   
        MaterielType::updateOrCreate(['id' => $this->type_id], [
            'libelle' => $this->libelle,
            'description'=> $this->description,
        ]);
  
        session()->flash('message', $this->type_id ? 'Le type "'. $this->libelle .'" a été modifiée avec Succès.' : 'Le type "'. $this->libelle .'"a été Ajoutée avec Succès');
        $this->closeModal();
        $this->resetInputFields();
       
    }

    /** open edit form with data*/
    public function edit($id)
    {
        $this->FrmEdit=true;
        $type = MaterielType::findOrFail($id);
        $this->type_id = $id;
        $this->libelle=$type->libelle;
        $this->description=$type->description;
        $this->openModal();
    }

    /**delete function */
    public function delete($id)
    {
        //$this->openModal();
        MaterielType::find($id)->delete();
        session()->flash('message', 'Le type'. $this->libelle .' a été supprimé avec Succès');
    }
}