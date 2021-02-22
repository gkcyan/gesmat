<?php

namespace App\Http\Livewire\MatModele;

use App\Models\MaterielModele;
use App\Models\MaterielMarque;
 
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;

class ModeleTable extends LivewireDatatable
{
    public $FrmCreateMaterielModele; //Create form variable
    public $FrmConsultMaterielModele; //Read form variable
    public $FrmImpPageMaterielModele; //imprime page form 
    public $FrmEditMaterielModele; //Edit form variable
    public $hideable = 'select';
    public $exportable = true;
    //public $afterTableSlot = 'components.selected';
    public $libelle, $description,$type_id,$materiel_marque_id;
    public $isOpen = 0;

    public $ListeMaterielMarques;
    



     /** open modal function**/
     public function openModal()
     {
         $this->isOpen =true;
     }
   
     /** close modal and initializing formualaire */
     public function closeModal()
     {
         $this->isOpen = false;
         $this->FrmCreateMaterielModele=false;
         $this->FrmConsultMaterielModele=false;
         $this->FrmEditMaterielModele=false;
        // $this->FrmImpPageMaterielModele=false;
     }


    //public $model = Direction::class;

    public function builder()
    {
        return MaterielModele::query();
                      
                         
    }

    
    public function columns()
    {
        //
        return [
            //Column::checkbox(),
            Column::name('libelle')->label('Type')->filterable()->searchable(),
            Column::name('description')->label('description')->filterable(),
            Column::name('MaterielMarque.libelle')->label('Marque')->filterable(),
           
          
            Column::callback(['id', 'libelle'], function ($id, $libelle) {
                return view('livewire.mat-type.table-action', ['id' => $id, 'libelle' => $libelle]);
            })
           
        ];
    }

    public function create()
    {
        $this->FrmCreateMaterielModele=true;
        $this->ListeMaterielMarques=MaterielMarque::orderBy('libelle')->get();
        $this->resetInputFields();
        $this->openModal();  
    }
  
    /**Read function */
    public function read($id)
    {
        $this->FrmConsultMaterielModele=true;
       // $this->ListeMaterielMarques=MaterielMarque::orderBy('libelle')->get();
        $type = MaterielModele::findOrFail($id);
        $this->id = $id;
        $this->libelle=$type->libelle;
        $this->description=$type->description;
        $this->materiel_marque_id=MaterielMarque::find($type->materiel_marque_id)->libelle;
        //dd($this->materiel_marque_id);
        $this->openModal();
    }

  
  
   /**form initliazing  */
    private function resetInputFields(){
        $this->libelle='';
        $this->description='';
        $this->materiel_marque_id='';
    }
     
    /** store and Update function */
    public function store()
    {
        $this->validate([
            'libelle' => 'required',// | unique:sites,libelle',
        ]);
   
        MaterielModele::updateOrCreate(['id' => $this->type_id], [
            'libelle' => $this->libelle,
            'description'=> $this->description,
            'materiel_marque_id'=>$this->materiel_marque_id,
        ]);
  
        session()->flash('message', $this->type_id ? 'Le type "'. $this->libelle .'" a été modifiée avec Succès.' : 'Le type "'. $this->libelle .'"a été Ajoutée avec Succès');
        $this->closeModal();
        $this->resetInputFields();
       
    }

    /** open edit form with data*/
    public function edit($id)
    {
        $this->FrmEditMaterielModele=true;
        $this->ListeMaterielMarques=MaterielMarque::orderBy('libelle')->get();
        $type = MaterielModele::findOrFail($id);
        $this->type_id = $id;
        $this->libelle=$type->libelle;
        $this->description=$type->description;
        $this->materiel_marque_id=$type->materiel_marque_id;
        $this->openModal();
    }

    /**delete function */
    public function delete($id)
    {
        //$this->openModal();
        MaterielModele::find($id)->delete();
        session()->flash('message', 'Le type'. $this->libelle .' a été supprimé avec Succès');
    }
}