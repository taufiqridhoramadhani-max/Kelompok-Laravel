<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Portfolio Kelompok</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#publicNavbar" aria-controls="publicNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="publicNavbar">
            <ul class="navbar-nav ms-auto align-items-center gap-2">
                <li class="nav-item">
                    <a class="nav-link rounded-pill px-3 {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill px-3 {{ request()->is('isi') ? 'active' : '' }}" href="{{ url('/isi') }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill px-3 {{ request()->is('project*') ? 'active' : '' }}" href="{{ url('/project') }}">Project</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link rounded-pill px-3 {{ request()->is('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-pill px-3 {{ request()->is('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link rounded-pill px-3 {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
