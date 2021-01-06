<?php

namespace App\Exports;

use App\Models\Entreprise;
use Illuminate\Support\Facades\Auth;
//use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Events\BeforeExport;
//use \Maatwebsite\Excel\Writer;
//use \Maatwebsite\Excel\Sheet;
/*use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;

*/


class EntreprisesExport implements FromQuery, WithColumnFormatting,WithHeadings ,WithMapping, ShouldAutoSize, WithEvents //, WithDrawings
{
    use Exportable;
    
    /**variable date pour trie */

      
    public function registerEvents(): array
    {
        return [

            BeforeExport::class  => function(BeforeExport $event) {
                  $event->writer->setCreator(config('app.name', 'Laravel'));
                  $event->writer->setLastModifiedBy(Auth::user()->name);
                  $event->writer->setTitle("Liste des entreprises");
                 
                  //$event->writer->setSubject("Office 2007 XLSX Test Document");
                  //$event->writer->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.");
                  //$event->writer->setKeywords("office 2007 openxml php");
                  //$event->writer->setCategory("Test result file");
            },

            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A3:I3'; // All headers
                //$event->sheet->getDelegate()->getStyle($cellRange)->getFont('Arial')->setSize(12);
                $event->sheet->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
                $event->sheet->getPageMargins()->setTop(0.75);
                $event->sheet->setAutoFilter('A1:I1');
               // $event->sheet->mergeCells();
                $event->sheet->getPageSetup()->setFitToWidth(1);
                $event->sheet->getPageSetup()->setFitToHeight(0);
                $event->sheet->insertNewRowBefore(1,2)->setTitle("Liste des entreprises")->mergeCells('A1:I2'); //inserez 2 lignes au dessus de la ligne 1
               // $event->sheet->getHeaderFooter()->addImage(drawings(), \PhpOffice\PhpSpreadsheet\Worksheet\HeaderFooter::IMAGE_HEADER_LEFT);
                //$event->sheet->getPageMargins()->setRight(0.25);
                //$event->sheet->getPageMargins()->setLeft(0.25);
                //$event->sheet->getPageMargins()->setBottom(0.50);
                $event->sheet->getHeaderFooter()->setOddHeader('&C&HPlease treat this document as confidential!');
                //$event->sheet->getHeaderFooter()->addImage($this->drawing, \PhpOffice\PhpSpreadsheet\Worksheet\HeaderFooter::IMAGE_HEADER_LEFT);
                $event->sheet->getHeaderFooter()->setOddFooter('&L&B &RPage &P / &N');
                $event->sheet->getHeaderFooter()->setOddFooter('&R&B &RPage &P / &N');
                $event->sheet->styleCells(
                    $cellRange,
                    [
                        'borders' => [
                            'allBorders' => [
                                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                                //'color' => ['argb' => 'FFFF0000'],
                            ],
                            'vertical'=> [
                                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DOTTED,
                                //'color' => ['argb' => 'FFFF0000'],
                            ],
                            
                        ],

                        'font' => [
                            'bold' => true,
                        ],

                        'alignment' => [
                            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                        ],

                        'fill' => [
                            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
                            'rotation' => 90,
                            'startColor' => [
                                'argb' => 'FFA0A0A0',
                            ],
                        'endColor' => [
                            'argb' => 'FFFFFFFF',
                            ],
                        ],
                    ],
                    
                );
                $event->sheet->styleCells(
                    'A4:I7',
                    [
                        'borders' => [
                            'allBorders' => [
                                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DOTTED,
                                //'color' => ['argb' => 'FFFF0000'],
                            ],
                            'outline'=> [
                                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                                //'color' => ['argb' => 'FFFF0000'],
                            ],
                        ],

                        'font' => [
                            'bold' => false,
                        ],

                        'alignment' => [
                            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                        ],

                        'fill' => [
                            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
                            'rotation' => 90,
                            'startColor' => [
                               // 'argb' => 'FFA0A0A0',
                            ],
                        'endColor' => [
                            'argb' => 'FFFFFFFF',
                        ],
                        ],
                    ],
                    
                );
               

            },
            
        ];
    }

    public function forYear(int $year)
    {
        $this->year = $year;
        
        return $this;
    }

    /**requete de selection des données à afficher */
    public function query()
    {
        return Entreprise::query();
    }

    /**titre des colonnes à affaicher */
    public function headings(): array
    {
        return [
            '#',
            'Denomination',
            'Nom_Commercial',
            'Sigle',
            'RCM',
            'NCC',
            'Adresse',
            'Reg Fiscal',
            'capital',
            //'Date de Mise à jour',
            //'image',
            //'actif',
        ];
    }

    /**liste des colonnes a afficher */
    public function map($entreprise): array
    {
        return [
            $entreprise->id,
            $entreprise->denomination,
            $entreprise->nom_commercial,
            $entreprise->sigle,
            $entreprise->rcm,
            $entreprise->ncc,
            $entreprise->adresse,
            $entreprise->forme_juridique,
            $entreprise->capital,
           // $entreprise->image,
           // $entreprise->actif,
         //  Date::dateTimeToExcel($entreprise->created_at),
            //$entreprise->total
        ];
    }
    
    /**formatage des colonnes  */
    public function columnFormats(): array
    {
        return [
            //'J' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            //'M' => NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE,
        ];
    }

    /**importation d'image */
    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('logo_.jpg') );
        $drawing->setHeight(70);
        $drawing->setCoordinates('A1');
       
        //$drawing->setOffsetX(10);
        //$drawing->setOffsetY(20);
        //$drawing->setWidth(60);
        return $drawing;
    }

}

