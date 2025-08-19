@extends('layouts.app')

@section('title', 'Companies')

@section('content')
    <form class="companyInsertForm" method="POST" action=" {{ route('insertCompany') }}" enctype="multipart/form-data">
    
        @csrf
        <h1>Company Insert</h1>
        <input type="text" name="name" placeholder="Company Name" id="companyName" required>
        <input type="email" name="email" placeholder="Email">
        <input type="url" name="website" placeholder="Website">
        <label for="logo" id="uploadCompanyLabel" class="icomoon">Upload your company image</label>
        <input type="file" name="logo" placeholder="Logo">
        <div class="companyInsertFormBTNs">
            <button type="submit" id="submitCompanyForm">Add Entry</button>
            <button type="button" id="closeCompanyForm">Clear</button>
        </div>
        <span class="errorSpanCompany">Ensure you enter a valid email using only digits</span>
    </form>
    <h1>Companies</h1>
    @foreach ($companies as $company)
        <div class="companyDiv">
            <p>{{ $company->name }} - {{ $company->email }} </p>
            <div class="link-deleteBTN">
                <a href="{{ $company->website}}" target="_blank"><img src="{{ asset('storage/logos/' . $company->logo) }}" alt="{{ $company->name }}" width="100"></a>
                <form method="POST" action="{{ route('deleteCompany') }}" class="deleteForm">
                    @csrf
                    <input type="hidden" name="id" value="{{ $company->id }}">
                    <button class="deleteCompany icomoon"></button>
                </form>
            </div>
        </div>
    @endforeach
    <script type="module" src="{{ asset('js/company.js') }}"></script>
@endsection

