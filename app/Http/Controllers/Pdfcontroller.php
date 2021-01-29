<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use PhpOffice\PhpSpreadsheet\Writer\Pdf;
use PDF;
use App\Models\Entreprise;

class Pdfcontroller extends Controller
{
    //
    public function generatePDF($id)
    {
        /**
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView('livewire.table', $data);
    
        return $pdf->download('itsolutionstuff.pdf');*/

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
        return $pdf->download('itsolutionstuff.pdf');


    }

    public function tablePDF()
    {
      
       $entreprise = Entreprise::all();
       $pdf = PDF::loadView('livewire.FrmImpTableEntreprise',compact('entreprise'));
        return $pdf->download('itsolutionstuff.pdf');
    }
}
