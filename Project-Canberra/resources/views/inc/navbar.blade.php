<header class="shadow-lg sticky-top">
    <nav class="navbar navbar-expand" style="background-color: aliceblue">
        <div class="container">
            <div class="col">
                <ul class="navbar-nav">
                    <li class="nav-item ms-0">
                        <a href="" class="nav-link"><i class="fa-brands fa-facebook text-primary"
                                style="font-size:1.5rem;"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link"><i class="fa-brands fa-twitter text-primary"
                                style="font-size:1.5rem;"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link"><i class="fa-brands fa-linkedin text-muted"
                                style="font-size:1.5rem;"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link"><i class="fa-brands fa-instagram-square text-muted"
                                style="font-size:1.5rem;"></i></a>
                    </li>

                </ul>
            </div>
            <div class="col">
                <div class="d-flex justify-content-end gap-2">
                    <i class="fa-solid fa-globe my-auto"></i>
                    <span class="span dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        International
                    </span>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Australia</a>
                        <a class="dropdown-item" href="#">USA</a>
                        <a class="dropdown-item" href="#">UK</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg" style="background-color:white;">
        <div class="container">
            <a href="/" class="navbar-brand">EXTRATECH</a>
            <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button"
                data-toggle="collapse" data-target="#navmenu" aria-controls="navmenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="toggler-icon top-bar"></span>
                <span class="toggler-icon middle-bar"></span>
                <span class="toggler-icon bottom-bar"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navmenu">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link text-dark">Home</a>
                    </li>

                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link text-dark">Login</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link text-dark">Register</a>
                            </li>
                        @endif
                        @if(Route::has('admin'))
                        <li class="nav-item ">
                            <a class="nav-link fw-bold" href="{{ route('admin') }}">
                                {{ __('Admin') }}
                            </a>

                        </li>
                        @endif

                    @else
                        <li class="nav-item ">
                            <a class="nav-link fw-bold" href="{{ route('home') }}">
                                Welcome, {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                </div>
                </li>
            @endguest
            </ul>
        </div>
        </div>
    </nav>
</header>
