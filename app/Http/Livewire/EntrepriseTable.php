<?php

namespace App\Http\Livewire;

use App\Models\Entreprise;
use App\Exports\EntreprisesExport;
use App\Http\Livewire\ContaintMenu;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\TimeColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use PDF;

//use Barryvdh\DomPDF\PDF;

class EntrepriseTable extends LivewireDatatable
{

    public $FrmCreateEntreprise; //Create form variable
    public $FrmEditEntreprise; //Edit form variable
    public $FrmImpPageEntreprise; //imprime page form 
    public $FrmConsultEntreprise; //Read form variable
    public $hideable = 'select';
    public $exportable = true;
    //public $afterTableSlot = 'components.selected';
    public $denomination, $nom_commercial, $sigle,
             $rcm, $ncc, $adresse,$forme_juridique,
             $capital,$image,$actif,$entreprises, $entreprise_id;
    public $isOpen = 0;


    public $model = Entreprise::class;

   /** open modal function**/
    public function openModal()
    {
        $this->isOpen =true;
    }
  
    /** close modal and initializing formualaire */
    public function closeModal()
    {
        $this->isOpen = false;
        $this->FrmCreateEntreprise=false;
        $this->FrmConsultEntreprise=false;
        $this->FrmEditEntreprise=false;
    }

    /**Excel export query */
    public function builder()
    {
        return Entreprise::query();
                          //->where('entreprise.id'>2)
                          //->get();
    }

    /**datatable columns */
    public function columns()
    {
        return [
            //Column::checkbox(),
            //NumberColumn::name('id')->filterable(),//->linkTo('denomination'),
            Column::name('denomination')->filterable()->searchable(),
            Column::name('nom_commercial')->filterable()->searchable()->editable(),
            DateColumn::name('created_at')->filterable(),
            //Column::delete()->label('delete')->alignRight(),
            Column::callback(['id', 'denomination'], function ($id, $denomination) {
                return view('table-action', ['id' => $id, 'denomination' => $denomination]);
            })
           
        ];
    }

    /**create function */
    public function create()
    {
        $this->FrmCreateEntreprise=true;
        $this->resetInputFields();
        $this->openModal();
    }
  
    /**Read function */
    public function read($id)
    {
        $this->FrmConsultEntreprise=true;
        $entreprise = Entreprise::findOrFail($id);
        $this->entreprise_id = $id;
        $this->denomination=$entreprise->denomination;
        $this->nom_commercial=$entreprise->nom_commercial;
        $this->sigle=$entreprise->sigle;
        $this->rcm=$entreprise->rcm;
        $this->ncc=$entreprise->ncc;
        $this->adresse=$entreprise->adresse;
        $this->forme_juridique=$entreprise->forme_juridique;
        $this->capital=$entreprise->capital;
        $this->image=$entreprise->image;
        $this->actif=$entreprise->actif;
        $this->openModal();

        //return view('livewire.read');
    }

    
  
   /**form initliazing  */
    private function resetInputFields(){
        $this->denomination='';
        $this->nom_commercial='';
        $this->sigle='';
        $this->rcm='';
        $this->ncc='';
        $this->adresse='';
        $this->forme_juridique='';
        $this->capital='';
        $this->image='';
        $this->actif='';
        $this->entreprise_id='';
    }
     
    /** store and Update function */
    public function store()
    {
        $this->validate([
            'denomination' => 'required',
            'rcm' => 'required',
            'ncc' => 'required',
            'adresse' => 'required',
            'forme_juridique' => 'required',
        ]);
   
        Entreprise::updateOrCreate(['id' => $this->entreprise_id], [
            
            'denomination' => $this->denomination,
            'nom_commercial'=> $this->nom_commercial,
            'sigle'=> $this->sigle,
            'rcm'=> $this->rcm,
            'ncc'=> $this->ncc,
            'adresse'=> $this->adresse,
            'forme_juridique'=> $this->forme_juridique,
            'capital'=> $this->capital,
            'image'=> $this->image,
            'actif'=> $this->actif,
            'entreprise_id'=> $this->entreprise_id
        ]);
  
        session()->flash('message', 
            $this->entreprise_id ? 'Entreprise Modifiée avec Succès.' : 'Entreprise Ajoutée avec Succès.');
  
        $this->closeModal();
        $this->resetInputFields();
       
    }

    /** open edit form with data*/
    public function edit($id)
    {
        $this->FrmEditEntreprise=true;
        $entreprise = Entreprise::findOrFail($id);
        $this->entreprise_id = $id;
        $this->denomination=$entreprise->denomination;
        $this->nom_commercial=$entreprise->nom_commercial;
        $this->sigle=$entreprise->sigle;
        $this->rcm=$entreprise->rcm;
        $this->ncc=$entreprise->ncc;
        $this->adresse=$entreprise->adresse;
        $this->forme_juridique=$entreprise->forme_juridique;
        $this->capital=$entreprise->capital;
        $this->image=$entreprise->image;
        $this->actif=$entreprise->actif;
        $this->openModal();
    }

    /**delete function */
    public function delete($id)
    {
        //$this->openModal();
        Entreprise::find($id)->delete();
        session()->flash('message', 'Entreprise Supprimée avec succès.');
    }

    /**PDF print  */
    public function print()
    {
        //return (new EntreprisesExport)->download('entreprises.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
        //return Excel::download(new EntreprisesExport, 'entreprises.pdf');
        return (new EntreprisesExport)->forYear(2020)->download('entreprises.pdf');
    }

    public function printPage($id)
    {
        //$this->FrmImpPageEntreprise=true;
        $entreprise = Entreprise::findOrFail($id);
        $data = [
            'entreprise_id' => $entreprise->id,
            'denomination'=>$entreprise->denomination,
            'nom_commercial'=>$entreprise->nom_commercial,
            'sigle'=>$entreprise->sigle,
            'ncc'=>$entreprise->ncc,
            'rcm'=>$entreprise->rcm,
            'adresse'=>$entreprise->adresse,
            'forme_juridique'=>$entreprise->forme_juridique,
            'capital'=>$entreprise->capital,
            'image'=>$entreprise->image,
            'actif'=>$entreprise->actif
            //'title' => 'Welcome to ItSolutionStuff.com',
            //'date' => date('m/d/Y')
        ];
       $pdf = PDF::loadView('livewire.FrmImpPageEntreprise', $data);
        return $pdf->stream('itsolutionstuff.pdf');


    }

   /* public function render()
    {
        $this->entreprises=Entreprise::all();
        return view('livewire.societe');
    }*/

}