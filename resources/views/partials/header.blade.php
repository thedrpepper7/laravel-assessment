<header>
    <div>
        <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Authentication</a>
        <a href="{{ url('/index') }}" class="{{ Request::is('index') ? 'active' : '' }}">Home Page</a>
        <a href="{{ url('/home') }}" class="{{ Request::is('home') ? 'active' : '' }}">Test Page</a>
    </div>
</header>
