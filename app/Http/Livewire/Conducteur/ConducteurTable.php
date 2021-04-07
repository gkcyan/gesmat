<?php

namespace App\Http\Livewire\Conducteur;

use App\Models\Conducteur;
use App\Models\ConducteurCategorie;
use App\Models\Site;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;

class ConducteurTable extends LivewireDatatable
{
    public $FrmCreateConducteur; //Create form variable
    public $FrmEditConducteur; //Edit form variable
    public $FrmImpPageConducteur; //imprime page form 
    public $FrmConsultConducteur; //Read form variable
    public $hideable = 'select';
    public $exportable = true;
    //public $afterTableSlot = 'components.selected';
    //public $libelle, $description,$categorie_id;
    public $isOpen = 0;
    public $nom, $prenom, $sexe, $nationalite, $matrimoniale, $nb_enfant,$date_naissance,$date_embauche,$site_id,
           $conducteur_categorie_id,$matricule, $cnps,$email,$conducteur_id;

    Public $ListeCategorie;
    Public $ListeSite;
    



     /** open modal function**/
     public function openModal()
     {
         $this->isOpen =true;
     }
   
     /** close modal and initializing formualaire */
     public function closeModal()
     {
         $this->isOpen = false;
         $this->FrmCreateConducteur=false;
         $this->FrmConsultConducteur=false;
         $this->FrmEditConducteur=false;
        // $this->FrmImpPageConducteur=false;
     }

    public function builder()
    {
        return Conducteur::query();
                                     
    }

    
    public function columns()
    {
        //
        return [
            //Column::checkbox(),
            Column::name('nom')->label('Nom')->filterable()->searchable(),
            Column::name('prenom')->label('prenom')->filterable(),
            Column::name('ConducteurCategorie.libelle')->label('Categorie')->filterable()->searchable(),
            Column::name('site.libelle')->label('Site')->filterable()->searchable(),
            Column::callback(['id', 'nom'], function ($id, $nom) {
                return view('livewire.conducteur.table-action', ['id' => $id, 'libelle' => $nom]);
            })
           
        ];
    }

    public function create()
    {
        $this->FrmCreateConducteur=true;
        $this->ListeCategorie = ConducteurCategorie::orderBy('libelle')->get();
        $this->ListeSite=Site::orderBy('libelle')->get();
        $this->resetInputFields();
        $this->openModal();  
    }
  
    /**Read function */
    public function read($id)
    {
        $this->FrmConsultConducteur=true;
        $extrait = Conducteur::findOrFail($id);
        $this->id = $id;
        $this->nom=$extrait->nom;
        $this->prenom=$extrait->prenom;
        $this->sexe=$extrait->sexe;
        $this->nationalite=$extrait->nationalite;
        $this->matrimoniale=$extrait->matrimoniale;
        $this->nb_enfant=$extrait->nb_enfant;
        $this->date_naissance=$extrait->date_naissance;
        $this->date_embauche=$extrait->date_embauche;
        $this->site_id=Site::find($extrait->site_id)->libelle;
        $this->conducteur_categorie_id=ConducteurCategorie::find($extrait->conducteur_categorie_id)->libelle ;
        $this->matricule=$extrait->matricule;
        $this->cnps=$extrait->cnps;
        $this->email=$extrait->email;

        $this->openModal();
    }

  
  
   /**form initliazing  */
    private function resetInputFields(){
        $this->nom='';
        $this->prenom='';
        $this->sexe='';
        $this->nationalite='';
        $this->matrimoniale='';
        $this->nb_enfant='';
        $this->date_naissance='';
        $this->date_embauche='';
        $this->site_id='';
        $this->conducteur_categorie_id='';
        $this->matricule='';
        $this->cnps='';
        $this->email='';
      
      
        
    }
     
    /** store and Update function */
    public function store()
    {
        $this->validate([
            'nom' => 'required',// | unique:sites,libelle',
            'cnps' => ['required', 'max:14', ($this->cnps) ? '' : 'unique:conducteurs'],
            
        ]);
        Conducteur::updateOrCreate(['id' => $this->conducteur_id], [
            
           'nom'=>$this->nom,
           'prenom'=>$this->prenom,
           'sexe'=>$this->sexe,
           'nationalite'=>$this->nationalite,
           'matrimoniale'=>$this->matrimoniale,
           'nb_enfant'=>$this->nb_enfant,
           'date_naissance'=>$this->date_naissance,
           'date_embauche'=>$this->date_embauche,
           'site_id'=>$this->site_id,
           'conducteur_categorie_id'=>$this->conducteur_categorie_id,
           'matricule'=>$this->matricule,
           'cnps'=>$this->cnps,
           'email'=>$this->email,
        ]);
  
        session()->flash('message', $this->conducteur_id ? 'Le conducteur "'. $this->nom.' '.$this->prenom .'" a été modifié avec Succès.' : 'Le conducteur "'. $this->nom.' '.$this->prenom .'"a été Ajouté avec Succès');
  
        $this->closeModal();
        $this->resetInputFields();
       
    }

    /** open edit form with data*/
    public function edit($id)
    {
        $this->FrmEditConducteur=true;
        $this->ListeCategorie = ConducteurCategorie::orderBy('libelle')->get();
        $this->ListeSite=Site::orderBy('libelle')->get();

        $extrait = Conducteur::findOrFail($id);
        $this->conducteur_id = $id;
        $this->nom=$extrait->nom;
        $this->prenom=$extrait->prenom;
        $this->sexe=$extrait->sexe;
        $this->nationalite=$extrait->nationalite;
        $this->matrimoniale=$extrait->matrimoniale;
        $this->nb_enfant=$extrait->nb_enfant;
        $this->date_naissance=$extrait->date_naissance;
        $this->date_embauche=$extrait->date_embauche;
        $this->site_id=$extrait->site_id;
        $this->conducteur_categorie_id=$extrait->conducteur_categorie_id;
        $this->matricule=$extrait->matricule;
        $this->cnps=$extrait->cnps;
        $this->email=$extrait->email;
      
        $this->openModal();
    }

    /**delete function */
    public function delete($id)
    {
        //$this->openModal();
        Conducteur::find($id)->delete();
        session()->flash('message', 'Le conducteur '. $this->nom.' '.$this->prenom.' a été supprimé avec Succès');
    }
}