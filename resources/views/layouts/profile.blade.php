<x-app-layout>
    <x-slot name="content">
        <div class="row gy-4">
            <h1>Ваш профиль, {{ auth()->user()->name }}</h1>
        </div>
    </x-slot>


    <x-slot name="meta_title">
        {{  isset($meta_title) ? $meta_title : "World to Me" }}
    </x-slot>

    <x-slot name="meta_description">
        {{  isset($meta_description) ? $meta_description : "World to Me" }}
    </x-slot>
</x-app-layout>
