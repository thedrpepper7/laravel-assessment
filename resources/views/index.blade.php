@extends('layouts.app')

@section('title', 'Companies')

@section('content')
    <h1>Companies</h1>

    @foreach ($companies as $company)
        <div class="companyDiv">
            <p>{{ $company->name }} - {{ $company->email }} </p>
            <a href="{{ $company->website}}" target="_blank"><img src="{{ asset('storage/logos/' . $company->logo) }}" alt="{{ $company->name }}" width="100"></a>
        </div>
    @endforeach
@endsection
