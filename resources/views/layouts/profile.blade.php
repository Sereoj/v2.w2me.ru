<x-app-layout>
    <x-slot name="content">
        <div class="row gy-4">
            <h1>Ваш профиль, {{ auth()->user()->name }}</h1>
        </div>
    </x-slot>
</x-app-layout>
