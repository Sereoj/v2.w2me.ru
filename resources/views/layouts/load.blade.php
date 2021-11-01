<x-app-layout>
    <x-slot name="content">
        @auth
        <div class="row gy-4">
        <h2>{{ $header ?? '' }}</h2>

{{--         {{ serialize($catalog) }}--}}
        <form method="POST">
            @csrf
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
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->download[0]->count_download }}</td>
                        <td>
                            <button type="submit" class="btn btn-primary" name="change" value="{{ $item->id }}">Изменить</button>
                            <button type="submit" class="btn btn-danger" name="delete" value="{{ $item->id }}">Удалить</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary" name="add" value="item">Добавить</button>
        </form>
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
