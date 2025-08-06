<header>
    <div>
        <a href="{{ url('/index') }}" class="{{ Request::is('index') ? 'active' : '' }}">Companies</a>
        <a href="{{ url('/home') }}" class="{{ Request::is('home') ? 'active' : '' }}">Employees</a>
    </div>
    <div>
        <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Login</a>
    </div>
</header>
