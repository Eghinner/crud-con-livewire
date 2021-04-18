<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tasks for {{ Auth::user()->name }}
        </h2>
    </x-slot>      
                  
                    @livewire('color')
{{-- <script src="{{asset('js/sorta.js')}}"></script> --}}
{{-- Fontawesome --}}
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
{{-- Sortable --}}
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script> --}}
</x-app-layout>
