<?php

namespace App\Http\Livewire\Servicii;

use App\Models\Serviciu;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $servicii = Serviciu::all();
        return view('livewire.servicii.index',[
            'servicii' => $servicii
        ]);
    }
}
