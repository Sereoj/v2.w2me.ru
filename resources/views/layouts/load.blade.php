<x-app-layout>
    <x-slot name="content">
        @auth
        <div class="row gy-4">
        <h2>{{ $header ?? '' }}</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Name</th>
                <th scope="col">Manage</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">Load</th>
                <td>Load</td>
                <td>
                    <button type="submit" class="btn btn-primary">Изменить</button>
                </td>
            </tr>
            </tbody>
        </table>
        </div>
        @endauth

        @guest
            <div class="alert alert-danger" role="alert">Нет доступа</div>
        @endguest
    </x-slot>

    <x-slot name="meta_title">
        {{  $meta_title ?? "World to Me" }}
    </x-slot>

    <x-slot name="meta_description">
        {{  $meta_description ?? "World to Me" }}
    </x-slot>
</x-app-layout>
