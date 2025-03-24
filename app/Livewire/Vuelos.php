<?php
namespace App\Livewire;

use App\Models\Reserva;
use App\Models\Vuelo;
use Livewire\Component;

class Vuelos extends Component
{
    public $vuelos;
    public $vueloSeleccionado;
    public $resultado;
    public $asientos;
    public $ocupados;


    public function mount()
    {
        $this->vuelos = Vuelo::with(['aeropuertoOrigen', 'aeropuertoDestino'])->get();
        
        
    }
    
    public function updatedVueloSeleccionado($id)
    {
        $this->resultado = Vuelo::where('id', $id)->with(['aeropuertoOrigen', 'aeropuertoDestino'])->first();
        $this->asientos = Reserva::where('vuelo_id', $this->resultado->id)->get(['asiento']);
        foreach($this->asientos as $asiento){
            $this->ocupados[] = $asiento->asiento;
        }
    }

    public function render()
    {
        return view('livewire.vuelos');
    }
}
