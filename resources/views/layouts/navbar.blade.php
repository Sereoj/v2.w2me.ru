<nav class="navbar navbar-light navbar-expand-md shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}" style="font-family: Roboto, sans-serif;">
            <i class="bi bi-house-door-fill"></i>
            World to Me
        </a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                class="visually-hidden">Toggle navigation</span><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1"
             style="font-family: Roboto, sans-serif;font-size: 14.5px;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('images.new') ? 'active' : '' }}" href="{{ route('images.new') }}">Новые</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('images.popular') ? 'active' : '' }}" href="{{ route('images.popular') }}">Популярные</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('images.wait') ? 'active' : '' }}" href="{{ route('images.wait') }}">Ожидаемые</a></li>

                @auth
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('images.favorite') ? 'active' : '' }}" href="{{ route('images.favorite') }}">Избранные</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('images.install') ? 'active' : '' }}" href="{{ route('images.install') }}">Установленные</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('images.load') ? 'active' : '' }}" href="{{ route('images.load') }}">Загружанные</a></li>
                @endauth
            </ul>
            <!-- <span class="navbar-text">
                Navbar text with an inline element
            </span> -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                        <i class="bi bi-person-circle"></i> Аккаунт</a>
                    <div class="dropdown-menu">
                        @guest
                            <a class="dropdown-item" href="{{ route('user.register') }}">Регистрация</a>
                            <a class="dropdown-item" href="{{ route('user.login') }}">Авторизация</a>
                        @endguest
                        @auth
                            <a class="dropdown-item" href="{{ route('user.profile') }}">Профиль</a>
                            <a class="dropdown-item" href="{{ route('user.logout') }}">Выход</a></div>
                        @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
