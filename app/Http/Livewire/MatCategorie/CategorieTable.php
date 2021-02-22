<?php

namespace App\Http\Livewire\MatCategorie;

use App\Models\MaterielCategorie;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;

class CategorieTable extends LivewireDatatable
{
    
    public $FrmCreateMatCategorie; //Create form variable
    public $FrmEditMatCategorie; //Edit form variable
    public $FrmImpPageMatCategorie; //imprime page form 
    public $FrmConsultMatCategorie; //Read form variable
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
         $this->FrmCreateMatCategorie=false;
         $this->FrmConsultMatCategorie=false;
         $this->FrmEditMatCategorie=false;
        // $this->FrmImpPageMatCategorie=false;
     }


    //public $model = Direction::class;

    public function builder()
    {
        return MaterielCategorie::query();
                      
                         
    }

    
    public function columns()
    {
        //
        return [
            //Column::checkbox(),
            Column::name('libelle')->label('Marque')->filterable()->searchable(),
            Column::name('description')->label('description')->filterable(),
           
          
            Column::callback(['id', 'libelle'], function ($id, $libelle) {
                return view('livewire.mat-categorie.table-action', ['id' => $id, 'libelle' => $libelle]);
            })
           
        ];
    }

    public function create()
    {
        $this->FrmCreateMatCategorie=true;
        $this->resetInputFields();
        $this->openModal();  
    }
  
    /**Read function */
    public function read($id)
    {
        $this->FrmConsultMatCategorie=true;
        $marque = MaterielCategorie::findOrFail($id);
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
   
        MaterielCategorie::updateOrCreate(['id' => $this->categorie_id], [
            
            'libelle' => $this->libelle,
            'description'=> $this->description,
          

        ]);
  
        session()->flash('message', $this->categorie_id ? 'La catégorie "'. $this->libelle .'" a été modifiée avec Succès.' : 'La catégorie "'. $this->libelle .'"a été Ajoutée avec Succès');
  
        $this->closeModal();
        $this->resetInputFields();
       
    }

    /** open edit form with data*/
    public function edit($id)
    {
        $this->FrmEditMatCategorie=true;
        $marque = MaterielCategorie::findOrFail($id);
        $this->categorie_id = $id;
        $this->libelle=$marque->libelle;
        $this->description=$marque->description;
      
        $this->openModal();
    }

    /**delete function */
    public function delete($id)
    {
        //$this->openModal();
        MaterielCategorie::find($id)->delete();
        session()->flash('message', 'La catégorie'. $this->libelle .' a été supprimée avec Succès');
    }
}