<nav  class="navbar navbar-expand-lg navbar-dark bg-dark p-2   " style="background-color: rgba(0, 0, 0, 0.2);" id="menu">
    <div class="container ">
        <a class="navbar-brand " href="#">
            <span class="fs-5 text-secondary fw-bold">Cj Shoes.</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-secondary" aria-current="page" href="{{ route('home') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="#seccion-contacto">Contactenos</a>
                </li>
            </ul>
        </div>
        <div>
            @guest
                @if (Route::has('login'))
                    <a class="btn btn-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                @endif

                @if (Route::has('register'))
                    <a class="btn btn-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            @endguest
        </div>

    </div>
</nav>
