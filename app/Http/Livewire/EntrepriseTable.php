<?php

namespace App\Http\Livewire;

use App\Models\Entreprise;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\TimeColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class EntrepriseTable extends LivewireDatatable
{

    public $hideable = 'select';
    public $exportable = true;
    //public $afterTableSlot = 'components.selected';

    public $model = Entreprise::class;

    public function builder()
    {
        return Entreprise::query();
                          //->where('entreprise.id'>2)
                          //->get();
    }

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
}