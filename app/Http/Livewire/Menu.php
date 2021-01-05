<?php

namespace App\Http\Livewire;

use Livewire\Component;



class Menu extends Component
{
   /*
    public $route;
    public $description;
    public $module;

    public function MenuModule($module)
    {
    
        if ($module='')
            {
                $this->route='';
                $this->route='';
            }
    }*/


    public function render()
    {
        return view('livewire.menu');
    }
}
