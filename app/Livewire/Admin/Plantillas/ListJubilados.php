<?php

namespace App\Livewire\Admin\Plantillas;

use Livewire\Component;

class ListJubilados extends Component
{
    public function render()
    {
        return view('livewire.admin.plantillas.list-jubilados')
        ->layout('layouts.app');
    }
}
