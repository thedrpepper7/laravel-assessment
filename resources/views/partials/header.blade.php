<header>
    <div>
        <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Companies</a>
        <a href="{{ url('/employees') }}" class="{{ Request::is('employees') ? 'active' : '' }}">Employees</a>
    </div>
    <div>
        <a href="{{ url('/authentication') }}" class="{{ Request::is('authentication') ? 'active' : '' }}">Login</a>
    </div>
</header>
