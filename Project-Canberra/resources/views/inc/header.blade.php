<header id="page-topbar" style="z-index:2">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box my-auto">


                <a href="{{ url('/admin/dashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <h1 class="text-light">ET</h1>

                        {{-- <img src="assets/admin/images/logo-sm.png" alt="logo-sm-light" height="22"> --}}
                    </span>
                    <span class="logo-lg">
                        <h1 class="text-light">EXTRATECH</h1>
                        {{-- <img src="assets/admin/images/logo-light.png" alt="logo-light" height="20"> --}}
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 mx-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-block">
                <div class="position-relative">
                    <input type="text" id="search" class="form-control" placeholder="Search...">
                    <span class="ri-search-line"></span>
                </div>
            </form>
        </div>

        <div class="d-flex justify-content-end">

            

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
            </div>

            {{-- <div class="dropdown d-inline-block user-dropdown"> --}}
                <span class="d-none">{{ $admin = Session('admin') }}</span>

            <div class="dropdown d-flex align-items-center">
                <button class="btn dropdown-toggle" type="button" id="dropdown" aria-haspopup="true"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="/storage/images/{{ $admin->image }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 text-light">{{ $admin->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block text-light"></i></button>

                <div class="dropdown-menu" aria-labelledby="dropdown">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i>
                        Profile</a>
                    <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> My
                        Wallet</a>
                    <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end mt-1">11</span><i
                            class="ri-settings-2-line align-middle me-1"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="ri-lock-unlock-line align-middle me-1"></i>
                        Lock screen</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{route('logouts')}}"><i
                            class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                </div>
            </div>
        </div>


       
    </div>
</header>

    

