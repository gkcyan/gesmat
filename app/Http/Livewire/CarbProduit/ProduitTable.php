<?php

namespace App\Http\Livewire\CarbProduit;

use App\Models\CarbCategorie;
use App\Models\CarbProduit;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;

class ProduitTable extends LivewireDatatable
{
   
    public $FrmCreateCarbProduit; //Create form variable
    public $FrmEditCarbProduit; //Edit form variable
    public $FrmImpPageCarbProduit; //imprime page form 
    public $FrmConsultCarbProduit; //Read form variable
    public $hideable = 'select';
    public $exportable = true;
    //public $afterTableSlot = 'components.selected';
    public $libelle, $description,$produit_id,$carb_categorie_id;
    public $isOpen = 0;
    public $ListeCategories;
    



     /** open modal function**/
     public function openModal()
     {
         $this->isOpen =true;
     }
   
     /** close modal and initializing formualaire */
     public function closeModal()
     {
         $this->isOpen = false;
         $this->FrmCreateCarbProduit=false;
         $this->FrmConsultCarbProduit=false;
         $this->FrmEditCarbProduit=false;
        // $this->FrmImpPageCarbProduit=false;
     }


    //public $model = Direction::class;

    public function builder()
    {
        return CarbProduit::query();
                      
                         
    }

    
    public function columns()
    {
        //
        return [
            //Column::checkbox(),
            Column::name('libelle')->label('Produit')->filterable()->searchable(),
            Column::name('description')->label('description')->filterable(),
            Column::name('CarbCategorie.libelle')->label('categorie')->filterable()->searchable(),
           
          
            Column::callback(['id', 'libelle'], function ($id, $libelle) {
                return view('livewire.carb-categorie.table-action', ['id' => $id, 'libelle' => $libelle]);
            })
           
        ];
    }

    public function create()
    {
        $this->FrmCreateCarbProduit=true;
        $this->ListeCategories=CarbCategorie::orderBy('libelle')->get();
        $this->resetInputFields();
        $this->openModal();  
    }
  
    /**Read function */
    public function read($id)
    {
        $this->FrmConsultCarbProduit=true;
        $produit = CarbProduit::findOrFail($id);
        $this->id = $id;
        $this->libelle=$produit->libelle;
        $this->description=$produit->description;
        $this->carb_categorie_id=CarbCategorie::find($produit->carb_categorie_id)->libelle;
        $this->openModal();
    }

  
  
   /**form initliazing  */
    private function resetInputFields(){
        $this->libelle='';
        $this->description='';
        $this->carb_categorie_id='';   
      
        
    }
     
    /** store and Update function */
    public function store()
    {
        $this->validate([
            'libelle' => 'required',// | unique:sites,libelle',
            'carb_categorie_id'=>'required'
            
        ]);
   
        CarbProduit::updateOrCreate(['id' => $this->produit_id], [
            
            'libelle' => $this->libelle,
            'description'=> $this->description,
            'carb_categorie_id'=>$this->carb_categorie_id,
          

        ]);
  
        session()->flash('message', $this->produit_id ? 'Le produit "'. $this->libelle .'" a été modifié avec Succès.' : 'Le produit "'. $this->libelle .'"a été Ajouté avec Succès');
  
        $this->closeModal();
        $this->resetInputFields();
       
    }

    /** open edit form with data*/
    public function edit($id)
    {
        $this->FrmEditCarbProduit=true;
        $this->ListeCategories=CarbCategorie::orderBy('libelle')->get();
        $produit = CarbProduit::findOrFail($id);
        $this->produit_id = $id;
        $this->libelle=$produit->libelle;
        $this->description=$produit->description;
        $this->carb_categorie_id=$produit->carb_categorie_id;
      
      
        $this->openModal();
    }

    /**delete function */
    public function delete($id)
    {
        //$this->openModal();
        CarbProduit::find($id)->delete();
        session()->flash('message', 'Le produit "'. $this->libelle .'"a été Supprimé avec Succès');
    }
}