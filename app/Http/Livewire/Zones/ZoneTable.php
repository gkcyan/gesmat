<?php

namespace App\Http\Livewire\Zones;


use App\Models\Gencadrement;
use App\Models\Service;
use App\Models\Zone;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ZoneTable extends LivewireDatatable
{
    public $FrmCreateZone; //Create form variable
    public $FrmEditZone; //Edit form variable
    public $FrmImpPageZone; //imprime page form 
    public $FrmConsultZone; //Read form variable
    public $hideable = 'select';
    public $exportable = true;
    //public $afterTableSlot = 'components.selected';
    public $libelle, $description, $longitude,$latitude,$type, $zone_id;
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
         $this->FrmCreateZone=false;
         $this->FrmConsultZone=false;
         $this->FrmEditZone=false;
        // $this->FrmImpPageZone=false;
     }


    //public $model = Direction::class;

    public function builder()
    {
        return Zone::query();
                      
                         
    }

    
    public function columns()
    {
        //
        return [
            //Column::checkbox(),
            Column::name('libelle')->label('Zone')->filterable()->searchable(),
            Column::name('type')->label('Modele Rural')->filterable(),
            Column::name('description')->label('description')->filterable(),
            Column::name('longitude')->label('longitude')->filterable(),
            Column::name('latitude')->label('latitude')->filterable(),
          
            Column::callback(['id', 'libelle'], function ($id, $libelle) {
                return view('livewire.Zones.table-action', ['id' => $id, 'libelle' => $libelle]);
            })
           
        ];
    }

    public function create()
    {
        $this->FrmCreateZone=true;
        $this->resetInputFields();
        $this->openModal();  
    }
  
    /**Read function */
    public function read($id)
    {
        $this->FrmConsultZone=true;
        $zone = Zone::findOrFail($id);
        $this->id = $id;
        $this->libelle=$zone->libelle;
        $this->description=$zone->description;
        $this->longitude=$zone->longitude;
        $this->latitude=$zone->latitude;
        $this->type=$zone->type;
        $this->openModal();
    }

  
  
   /**form initliazing  */
    private function resetInputFields(){
        $this->libelle='';
        $this->description='';
        $this->longitude='';
        $this->latitude='';
        $this->type='';
    }
     
    /** store and Update function */
    public function store()
    {
        $this->validate([
            'libelle' => 'required',// | unique:sites,libelle',
            'type' => 'required',
          
        ]);
   
        Zone::updateOrCreate(['id' => $this->zone_id], [
            
            'libelle' => $this->libelle,
            'description'=> $this->description,
            'longitude'=> $this->longitude,
            'latitude'=>$this->latitude,
            'type'=>$this->type,
            'zone_id'=> $this->zone_id,

        ]);
  
        session()->flash('message', $this->zone_id ? 'La zone "'. $this->libelle .'" a été modifiée avec Succès.' : 'La zone "'. $this->libelle .'"a été Ajoutée avec Succès');
  
        $this->closeModal();
        $this->resetInputFields();
       
    }

    /** open edit form with data*/
    public function edit($id)
    {
        $this->FrmEditZone=true;
        $zone = Zone::findOrFail($id);
        $this->zone_id = $id;
        $this->libelle=$zone->libelle;
        $this->longitude=$zone->longitude;
        $this->description=$zone->description;
        $this->latitude=$zone->latitude;
        $this->type=$zone->type;
        $this->openModal();
    }

    /**delete function */
    public function delete($id)
    {
        //$this->openModal();
        Zone::find($id)->delete();
        session()->flash('message', 'La Zone'. $this->libelle .' a été supprimée avec Succès');
    }
}