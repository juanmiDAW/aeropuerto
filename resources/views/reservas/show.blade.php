<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ver reserva
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Código
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $reserva->vuelo->codigo }}
                            </dd>
                        </div>
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Origen
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $reserva->vuelo->aeropuertoOrigen->nombre }}
                            </dd>
                        </div>
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Destino
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $reserva->vuelo->aeropuertoDestino->nombre }}
                            </dd>
                        </div>
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Salida
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $reserva->vuelo->salida }}
                            </dd>
                        </div>
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Llegada
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $reserva->vuelo->llegada }}
                            </dd>
                        </div>
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Plazas totales
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $reserva->vuelo->plazas }}
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>