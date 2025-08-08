@extends('layouts.app')

@section('title', 'User Authentication')

@section('content')
    <div class="loginDiv">
        <h1>Login to view more</h1>
        <div class="loginForm">
            <form method="POST" action="{{ route('login') }}">
                <input type="text" placeholder="Username">
                <input type="password" placeholder="Password">
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
@endsection
