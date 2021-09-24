<x-app-layout>
    <x-slot name="content">
        <div class="row gy-4">
            <form method="POST" action="{{ route('user.register') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Имя: </label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
                    @error('name')
                    <div id="nameHelp" class="form-text">Введите достоверное имя пользователя</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email: </label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    @error('email')
                    <div id="nameHelp" class="form-text">Указанный email введен неверно, либо уже существует</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль:</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @error('password')
                    <div id="nameHelp" class="form-text">Введите более сложный пароль</div>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberUser">
                    <label class="form-check-label" for="rememberUser">Запомни меня</label>
                </div>
                <button type="submit" class="btn btn-primary">Войти</button>
            </form>
        </div>
    </x-slot>
</x-app-layout>
