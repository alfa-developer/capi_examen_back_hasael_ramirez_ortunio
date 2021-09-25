<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Usuarios
        </h2>
    </x-slot>

    <div class="py-12">
        {{--contenido--}}
        {{$users}}
    </div>
</x-app-layout>
