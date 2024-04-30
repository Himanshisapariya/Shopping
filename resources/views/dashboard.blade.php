
<style>
    
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <a href="{{ route('dashboard') }}">
        <button class="btn">Go Back To Website.</button>
    </a>
</x-app-layout>
