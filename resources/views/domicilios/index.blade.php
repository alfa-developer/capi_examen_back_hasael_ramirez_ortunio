<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Domicilios
        </h2>
    </x-slot>

    <div class="py-12">
        {{--contenido--}}
       {{$domicilios}}
    </div>
</x-app-layout>
