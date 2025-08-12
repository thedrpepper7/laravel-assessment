<header>
    <div>
        <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
        <a href="{{ url('/companies') }}" class="{{ Request::is('companies') ? 'active' : '' }}">Companies</a>
        @auth
        <a href="{{ url('/employees') }}" class="{{ Request::is('employees') ? 'active' : '' }}">Employees</a>
        @else 
        @endauth
    </div>
    <div>
        @auth
        <div class="logoutBTN">
            <a href="#">{{ auth()->user()->name }}</a>
            <form class="logoutBox" action="{{ route('logout') }}" method="POST">
                @csrf
                <button>Logout</button>
            </form>
        </div>
        @else 
        <a href="{{ url('/authentication') }}" class="{{ Request::is('authentication') ? 'active' : '' }}">Login</a>
        @endauth
    </div>
</header>
