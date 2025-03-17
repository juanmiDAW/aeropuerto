<?php

namespace App\Livewire;

use App\Models\Vuelo;
use Livewire\Component;

class Vuelos extends Component
{
    public $vuelos;
    public $vuelo;

    public function mount(){
        $this->vuelos = Vuelo::with(['aeropuertoOrigen', 'aeropuertoDestino'])->get();
    }
    public function render()
    {
        return view('livewire.vuelos');
    }
}
