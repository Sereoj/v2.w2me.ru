<x-app-layout>
    <x-slot name="content">
        <div class="row gy-4">
            <form method="POST" action="{{ route('user.login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email: </label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="admin@w2me.ru" value="{{ old('email') }}">
                    @error('email')
                    <div id="emailHelp" class="form-text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль:</label>
                    <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" name="password">
                    @error('password')
                    <div id="passwordHelp" class="form-text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberUser" name="rememberUser" value="true">
                    <label class="form-check-label" for="rememberUser">Запомни меня</label>
                </div>
                <div class="md-3">
                    <button type="submit" class="btn btn-primary">Войти</button>
                    <a class="btn btn-link" href="">Восстановить пароль</a>
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
