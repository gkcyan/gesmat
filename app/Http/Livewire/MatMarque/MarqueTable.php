<?php

namespace App\Http\Livewire\MatMarque;

use App\Models\MaterielMarque;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class MarqueTable extends LivewireDatatable
{
    public $FrmCreateMatMarque; //Create form variable
    public $FrmEditMatMarque; //Edit form variable
    public $FrmImpPageMatMarque; //imprime page form 
    public $FrmConsultMatMarque; //Read form variable
    public $hideable = 'select';
    public $exportable = true;
    //public $afterTableSlot = 'components.selected';
    public $libelle, $description,$marque_id;
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
         $this->FrmCreateMatMarque=false;
         $this->FrmConsultMatMarque=false;
         $this->FrmEditMatMarque=false;
        // $this->FrmImpPageMatMarque=false;
     }


    //public $model = Direction::class;

    public function builder()
    {
        return MaterielMarque::query();
                      
                         
    }

    
    public function columns()
    {
        //
        return [
            //Column::checkbox(),
            Column::name('libelle')->label('Marque')->filterable()->searchable(),
            Column::name('description')->label('description')->filterable(),
           
          
            Column::callback(['id', 'libelle'], function ($id, $libelle) {
                return view('livewire.mat-type.table-action', ['id' => $id, 'libelle' => $libelle]);
            })
           
        ];
    }

    public function create()
    {
        $this->FrmCreateMatMarque=true;
        $this->resetInputFields();
        $this->openModal();  
    }
  
    /**Read function */
    public function read($id)
    {
        $this->FrmConsultMatMarque=true;
        $marque = MaterielMarque::findOrFail($id);
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
   
        MaterielMarque::updateOrCreate(['id' => $this->marque_id], [
            
            'libelle' => $this->libelle,
            'description'=> $this->description,
          

        ]);
  
        session()->flash('message', $this->marque_id ? 'La marque "'. $this->libelle .'" a été modifiée avec Succès.' : 'La marque "'. $this->libelle .'"a été Ajoutée avec Succès');
  
        $this->closeModal();
        $this->resetInputFields();
       
    }

    /** open edit form with data*/
    public function edit($id)
    {
        $this->FrmEditMatMarque=true;
        $marque = MaterielMarque::findOrFail($id);
        $this->marque_id = $id;
        $this->libelle=$marque->libelle;
        $this->description=$marque->description;
      
        $this->openModal();
    }

    /**delete function */
    public function delete($id)
    {
        //$this->openModal();
        MaterielMarque::find($id)->delete();
        session()->flash('message', 'La marque'. $this->libelle .' a été supprimée avec Succès');
    }
}