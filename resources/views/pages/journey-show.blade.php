<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Trip Info') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="text-2xl">Origin Location: <b>{{ $journey->route->origin->name }}</b></p>
                    <p class="text-2xl">Destination Location: <b>{{ $journey->route->destination->name }}</b></p>
                    <br>
                    <p class="text-2xl">Bus Number: <b>{{ $journey->bus->bus_no }}</b></p>
                    <br>
                    <p class="text-2xl">Departure: <b>{{ $journey->getDeparture() }}</b></p>
                    <p class="text-2xl">Arrival: <b>{{ $journey->getArrival() }}</b></p>
                    <br>
                    <p class="text-2xl">Stoppages</p>
                    <ul>
                        <li> • <b>{{ $journey->route->origin->name }}</b></li>
                        @foreach ($journey->route->stops as $stop)
                            <li>↓ <b>{{ $stop->name }}</b></li>
                        @endforeach
                        <li> • <b>{{ $journey->route->destination->name }}</b></li>
                    </ul>
                    <a class="underline text-sm text-sky-600 dark:text-gray-400 hover:text-sky-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('journey.edit', $journey->id) }}">Update</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
