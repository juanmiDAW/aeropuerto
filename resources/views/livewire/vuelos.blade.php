<div>
    @if (session('info'))
        @if (session('info') === 'No hay plazas disponibles')
            <div class="alert alert-success bg-red-500">
                {{ session('info') }}
            </div>
        @else
        <div class="alert alert-success bg-green-500">
            {{ session('info') }}
        </div>
        @endif
    @endif

    <label for="vuelo">Selecciona un vuelo:</label>
    <select name="vuelo" id="vuelo" wire:model.live="vueloSeleccionado">
        <option value="">Seleccione un vuelo</option>
        @foreach ($vuelos as $vuelo)
            <option value="{{ $vuelo->id }}">
                {{ $vuelo->aeropuertoOrigen->nombre }} - {{ $vuelo->aeropuertoDestino->nombre }}
            </option>
        @endforeach
    </select>

    @if ($resultado)
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
        <form action="{{ route('reservas.store') }} " method="POST">
            @csrf
            <input type="hidden" name="vuelo_id" value="{{ $resultado->id }}">
            <button type="submit"
                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Reservar</button>
        </form>
    @else
        <p class="mt-4">Selecciona un vuelo para ver los detalles.</p>
    @endif
</div>
