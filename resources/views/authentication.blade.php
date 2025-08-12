@extends('layouts.app')

@section('title', 'User Authentication')

@section('content')
    <div class="loginDiv">
        <h1>Login to view more</h1>
        <form method="POST" action="{{ route('login.submit') }}" class="loginForm">
            @csrf
            <input type="text" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
    @if ($errors->any())
    <span class="loginErrorSpan">Incorrect Login. Please enter a valid email and password to continue</span>
    @endif
@endsection
