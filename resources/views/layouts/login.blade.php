<x-app-layout>
    <x-slot name="content">
        <div class="row gy-4">
            <form method="POST" action="{{ route('user.login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    @error('email')
                    <div id="nameHelp" class="form-text">We'll never share your email with anyone else.</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль: </label>
                    <input type="password" class="form-control" id="password" name="password">
                    @error('password')
                    <div id="nameHelp" class="form-text">We'll never share your email with anyone else.</div>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
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
