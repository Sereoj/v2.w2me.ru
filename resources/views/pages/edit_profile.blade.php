<x-app-layout>
    <x-slot name="content">
        <div class="row gy-4">
            <h2>{{ $header ?? '' }}</h2>
            <form class="{{$style}}" method="post" novalidate enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label for="username" class="form-label">Имя пользователя</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">@</span>
{{--                            id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus--}}
                            <input id="username" name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Username" value="{{ $user->name }}" required autofocus>
                        </div>
                        <div class="invalid-feedback">@error('email'){{$message}}@enderror</div>
                    </div>

                    <div class="col-sm-8">
                        <label for="image" class="form-label">Изображение</label>
                        <input type="file" class="form-control @error('photo') is-invalid @enderror" id="image" name="photo" value="{{ old('photo') }}">
                        <div class="badge bg-danger text-wrap">@error('photo'){{$message}}@enderror</div>
                    </div>

                    <div class="col-sm-6">
                        <label for="old-pass" class="form-label">Старый пароль</label>
                        <input type="password" class="form-control @error('old_password') is-invalid @enderror" id="old-pass" name="old_password" min="6">
                        <div class="invalid-feedback">@error('old_password'){{$message}}@enderror</div>
                    </div>

                    <div class="col-sm-6">
                        <label for="new-pass" class="form-label">Новый пароль</label>
                        <input type="password" class="form-control @error('new_password') is-invalid @enderror" id="new-pass" name="new_password" min="6">
                        <div class="invalid-feedback">@error('new_password'){{ $message }}@enderror</div>
                    </div>
                    @if($status_image)
                        <div class="alert alert-success" role="alert">Изображение загружено на сервер</div>
                    @endif
                    @if($status)
                    <div class="alert alert-success" role="alert">Успешно изменен пароль</div>
                    @endif
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit">Сохранить</button>
                    </div>
                </div>
            </form>
        </div>
    </x-slot>


    <x-slot name="meta_title">
        {{  isset($meta_title) ? $meta_title : "World to Me" }}
    </x-slot>

    <x-slot name="meta_description">
        {{  isset($meta_description) ? $meta_description : "World to Me" }}
    </x-slot>
</x-app-layout>
