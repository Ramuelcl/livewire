<header class="flex justify-between items-center py-5">
    <div>LOGO</div>
    <nav>
        <a class="nav-link mr-5 hover:text-green-500" href="{{ route('jobs.index') }}">
            <i class=" fas fa-building"></i><span>Nos missions</span>
        </a>
        @guest
            <a class="nav-link mr-5 hover:text-green-500" href="{{ route('login') }}">
                <i class=" fas fa-building"></i><span>Conectarse</span>
            </a>
            <a class="nav-link mr-5 hover:text-green-500" href="{{ route('register') }}">
                <i class=" fas fa-building"></i><span>Registrarse</span>
            </a>
        @else
            {{-- <li class="side-menus {{ Request::is('*') ? 'active' : '' }}"> --}}
            <a class="nav-link mr-5 hover:text-green-500" href="{{ route('home') }}">
                <i class=" fas fa-building"></i><span>Dashboard</span>
            </a>
            <a class="nav-link mr-5 hover:text-green-500" href="/usuarios">
                <i class=" fas fa-users"></i><span>Usuarios</span>
            </a>
            <a class="nav-link mr-5 hover:text-green-500" href="/roles">
                <i class=" fas fa-user-lock"></i><span>Roles</span>
            </a>
            <a class="nav-link mr-5 hover:text-green-500" href="/blogs">
                <i class=" fas fa-blog"></i><span>Blogs</span>
            </a>
            <a class="nav-link mr-5 hover:text-green-500"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                href="{{ route('logout') }}">
                <i class=" fas fa-blog"></i><span>Desconectarse</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">@csrf</form>
            {{-- </li> --}}
        </nav>
    @endguest
</header>
