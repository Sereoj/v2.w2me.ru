<x-app-layout>
    <x-slot name="content">
        <div class="row gy-4">
            <h2>{{ $header ?? '' }}</h2>
                <div class="col col-xl-2 col-md-4 col-lg-3">
                    <img src="{{$image}}" class="img-profile rounded float-start">
                    <form method="POST">
                        @csrf
                        <button class="btn btn-primary mx-4" name="edit" value="true">Редактировать</button>
                    </form>
                </div>
                <div class="col col-xl-8 col-md-6 col-lg-6">
                    <p class="lead">Имя: {{ $user->name }}</p>
                    <p class="lead">Роль: {{ $user->role->role }}</p>
                    <p class="lead">Тип аккаунта: {{ $user->type->type }}</p>
                    <p class="lead">Ваш баланс: {{ $user->type->cost }}</p>
                    <p class="lead">Дата создания аккаунта: {{ $user->created_at }}</p>
                    <div class="alert alert-danger" role="alert">Требуется подверждение email: <span>{{$user->email}}</span></div>
                </div>
        </div>
    </x-slot>


    <x-slot name="meta_title">
        {{  isset($meta_title) ? $meta_title : "World to Me" }}
    </x-slot>

    <x-slot name="meta_description">
        {{  isset($meta_description) ? $meta_description : "World to Me" }}
    </x-slot>
</x-app-layout>
