<ul class="metismenu list-unstyled" id="side-menu">
    <li class="menu-title">Menu</li>

    <li>
        <a href="{{ route('admin.dashboard') }}" class="waves-effect">
            <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
            <span>Dashboard</span>
        </a>
    </li>



    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="ri-mail-send-line"></i>
            <span>Users Management</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('users.view') }}">View Users</a></li>
            <li><a href="{{route('users.add')}}">Add User</a></li>
            {{-- <li><a href="{{route('users.action')}}">Action</a></li>
            <li><a href="{{route('users.activate')}}">Activate User</a></li> --}}
        </ul>
    </li>


    <li class="menu-title">Pages</li>
    <li>
        <a href="#" class="has-arrow waves-effect">
            <i class="ri-layout-3-line"></i>
            <span>Blogs</span>
        </a>
        <ul class="sub-menu" aria-expanded="true">
            <li>
                <a href="#" class="has-arrow">Blogs Management</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="{{url('/admin/post/add')}}">Add new event</a></li>
                    <li><a href="{{url('/admin/post/action')}}">Action</a></li>
                   
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow">Services</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="layouts-horizontal.html">Add new Service</a></li>
                    <li><a href="layouts-hori-topbar-light.html">Edit new Service</a></li>
                    <li><a href="layouts-hori-boxed-width.html">Delete Service</a></li>
                </ul>
            </li>
        </ul>
    </li>

    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="ri-account-circle-line"></i>
            <span>Authentication</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="auth-login.html">Login</a></li>
            <li><a href="auth-register.html">Register</a></li>
            <li><a href="auth-recoverpw.html">Recover Password</a></li>
            <li><a href="auth-lock-screen.html">Lock Screen</a></li>
        </ul>
    </li>
</ul>
