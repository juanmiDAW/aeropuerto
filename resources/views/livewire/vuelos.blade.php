<div>
    <select name="vuelo" id="vuelo" wire:model="vuelo">
       
        <option value="">Seleccione un vuelo</option>
        @foreach ($vuelos as $vuelo)
        <option value="{{$vuelo->codigo}}">{{$vuelo->aeropuertoOrigen->nombre}}-{{$vuelo->aeropuertoDestino->nombre}}</option>
        @endforeach
    </select>
        @if($vuelo)
        @php
            $vuelo = $vuelos->find('codigo', $vuelo);
        @endphp
        <table>
            <tr>
                <th>Codigo</th>
                <th>Origen</th>
                <th>Destino</th>
                <th>Salida</th>
                <th>Llegada</th>
                <th>Plazas</th>
                <th>Precio</th>
            </tr>
            <tr>
                <td>{{$vuelo->codigo}}</td>
                <td>{{$vuelo->origen}}</td>
                <td>{{$vuelo->destino}}</td>
                <td>{{$vuelo->salida}}</td>
                <td>{{$vuelo->llegada}}</td>
                <td>{{$vuelo->plazas}}</td>
                <td>{{$vuelo->precio}}</td>
            </tr>
        </table>
        @endif
</div>
