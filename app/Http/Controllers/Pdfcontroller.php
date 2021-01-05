<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use PhpOffice\PhpSpreadsheet\Writer\Pdf;
use PDF;

class Pdfcontroller extends Controller
{
    //
    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView('livewire.table', $data);
    
        return $pdf->download('itsolutionstuff.pdf');
    }
}
