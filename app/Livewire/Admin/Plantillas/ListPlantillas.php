<?php

namespace App\Livewire\Admin\Plantillas;

use App\Http\Livewire\Admin\AdminComponent;
use Livewire\Component;

class ListPlantillas extends Component
{
    public function render()
    {
        return view('livewire.admin.plantillas.list-plantillas')
        ->layout('layouts.app');
    }
}
