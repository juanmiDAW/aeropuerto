<div>
    <label for="vuelo">Selecciona un vuelo:</label>
    <select name="vuelo" id="vuelo" wire:model.live="vueloSeleccionado">
        <option value="">Seleccione un vuelo</option>
        @foreach ($vuelos as $vuelo)
            <option value="{{ $vuelo->id }}">
                {{ $vuelo->aeropuertoOrigen->nombre }} - {{ $vuelo->aeropuertoDestino->nombre }}
            </option>
        @endforeach
    </select>

    @if($resultado)
        <table border="1" class="mt-4">
            <tr>
                <th>Código</th>
                <th>Origen</th>
                <th>Destino</th>
                <th>Salida</th>
                <th>Llegada</th>
                <th>Plazas</th>
                <th>Precio</th>
            </tr>
            <tr>
                <td>{{ $resultado->codigo }}</td>
                <td>{{ $resultado->aeropuertoOrigen->nombre }}</td>
                <td>{{ $resultado->aeropuertoDestino->nombre }}</td>
                <td>{{ $resultado->salida }}</td>
                <td>{{ $resultado->llegada }}</td>
                <td>{{ $resultado->plazas }}</td>
                <td>{{ $resultado->precio }}</td>
            </tr>
        </table>
      
    @else
        <p class="mt-4">Selecciona un vuelo para ver los detalles.</p>
    @endif
</div>
