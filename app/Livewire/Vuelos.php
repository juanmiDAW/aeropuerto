<?php
namespace App\Livewire;

use App\Models\Vuelo;
use Livewire\Component;

class Vuelos extends Component
{
    public $vuelos;
    public $vueloSeleccionado;
    public $resultado;

    public function mount()
    {
        $this->vuelos = Vuelo::with(['aeropuertoOrigen', 'aeropuertoDestino'])->get();

        
    }

    public function updatedVueloSeleccionado($id)
    {
        $this->resultado = Vuelo::where('id', $id)->with(['aeropuertoOrigen', 'aeropuertoDestino'])->first();

    }

    public function render()
    {
        return view('livewire.vuelos');
    }
}
