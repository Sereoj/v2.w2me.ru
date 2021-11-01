<x-app-layout>
    <x-slot name="content">
        <div class="row gy-4">
            <form method="POST" action="{{ route('user.register') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Имя: </label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Admin" value="{{ old('name') }}">
                    @error('name')
                        <div id="nameHelp" class="form-text">{{ $message }}</div>
                    @enderror
                </div>
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
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Повторите пароль:</label>
                    <input type="password" class="form-control" id="password_confirmation" aria-describedby="passwordHelp" name="password_confirmation">
                    @error('password')
                    <div id="passwordHelp" class="form-text">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Войти</button>
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
