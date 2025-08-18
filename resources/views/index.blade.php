@extends('layouts.app')

@section('title', 'Companies')

@section('content')
    <h1>Companies</h1>

    @foreach ($companies as $company)
        <div class="companyDiv">
            <p>{{ $company->name }} - {{ $company->email }} </p>
            <div class="link-deleteBTN">
                <a href="{{ $company->website}}" target="_blank"><img src="{{ asset('storage/logos/' . $company->logo) }}" alt="{{ $company->name }}" width="100"></a>
                <form method="POST" action="{{ route('delete') }}" class="deleteForm">
                    @csrf
                    <input type="hidden" name="id" value="{{ $company->id }}">
                    <button class="deleteCompany icomoon"></button>
                </form>
            </div>
        </div>
    @endforeach
    <script type="module" src="{{ asset('js/company.js') }}"></script>
@endsection

