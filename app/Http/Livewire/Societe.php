<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Entreprise;
use App\Exports\EntreprisesExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;


class Societe extends Component
{
    public $denomination, $nom_commercial, $sigle,
             $rcm, $ncc, $adresse,$forme_juridique,
             $capital,$image,$actif,$entreprises, $entreprise_id;
    public $isOpen = 0;

    

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'denomination' => 'required|unique:entreprises',
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
            $this->entreprise_id ? 'Entreprise Updated Successfully.' : 'Entreprise Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
       
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
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

    public function read($id)
    {
        return view('livewire.read');
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Entreprise::find($id)->delete();
        session()->flash('message', 'Entreprise Deleted Successfully.');
    }

    
    public function print()
    {
        //return (new EntreprisesExport)->download('entreprises.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
        //return Excel::download(new EntreprisesExport, 'entreprises.pdf');
        return (new EntreprisesExport)->forYear(2020)->download('entreprises.pdf');
    }

    public function export() 
    {
       // return Excel::download(new EntreprisesExport, 'entreprises.xlsx');
        //return (new EntreprisesExport)->download('entreprises.xlsx', \Maatwebsite\Excel\Excel::XLSX, ['Content-Type' => 'text/xlsx']);
        return (new EntreprisesExport)->forYear(2020)->download('entreprises.xlsx');
    }
    
        public function render()
    {
        $this->entreprises=Entreprise::all();
        return view('livewire.societe');
    }
}
