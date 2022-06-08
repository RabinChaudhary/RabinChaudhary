<header class="shadow-lg sticky-top">
    <nav class="navbar navbar-expand" style="background-color: 	#6fa8dc; height:2.5rem;">
        <div class="container">

            <ul class="navbar-nav mx-lg-auto ">
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
    </nav>
    <nav class="navbar navbar-expand-lg" style="background-color:	#134f5c">
        <div class="container">
            <a href="/" class="navbar-brand" style="color:#6fa8dc">EXTRATECH</a>
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
                        <a href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>
                    

                    @guest
                        @if (Route::has('login'))
                            
                            <li class="nav-item">
                                <a href="#myCarousel" class="nav-link">Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="#blogs" class="nav-link">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Login</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            </li>
                        @endif
                       
                    @else
                        <li class="nav-item ">
                            <a class="nav-link fw-bold" href="{{ route('home') }}">
                                Welcome, {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-light" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('logout') }}" onclick="event.preventDefault();
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
