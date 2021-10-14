<x-app-layout>
    <x-slot name="content">
        @auth
        <div class="row gy-4">
        <h2>{{ $header ?? '' }}</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th>Имя</th>
                <th>Количество скачиваний</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>

            @foreach($catalog as $item)
            <tr>
                <td>{{ serialize($catalog) }}</td>
                <td>{{ $item->name }}</td>
                <td>1000</td>
                <td>
                    <button type="submit" class="btn btn-primary">Изменить</button>
                    <button type="submit" class="btn btn-danger">Удалить</button>
                </td>
            </tr>
            @endforeach
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
