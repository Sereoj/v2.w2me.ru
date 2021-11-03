<x-app-layout>
    <x-slot name="content">
        @auth
        <div class="row gy-4">
        <h2>{{ $header ?? '' }}</h2>
            <div class="alert alert-danger" role="alert">Нет доступа</div>

        @endauth

        @guest
            <div class="alert alert-danger" role="alert">Нет доступа</div>
        @endguest
        </div>
    </x-slot>

    <x-slot name="meta_title">
        {{  $meta_title ?? "World to Me" }}
    </x-slot>

    <x-slot name="meta_description">
        {{  $meta_description ?? "World to Me" }}
    </x-slot>
</x-app-layout>
