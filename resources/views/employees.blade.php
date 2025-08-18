@extends('layouts.app')

@section('title', 'Employees')

@section('content')
    <h1>Employees</h1>
    <div class="employeeGrid">
        @foreach ($employees as $employee)
            <div class="employeeDiv">
                <p>{{ $employee->first_name }} {{ $employee->last_name }} of {{ $employee->company}}</p> 
                <button>Contact Information:</button>
                <div class="hiddenContact">
                    <p>Email: [{{ $employee->email}}] </p> 
                    <p>Phone Number: [{{ $employee->phone_number }}] </p> 
                </div>
            </div>
        @endforeach
    </div>
    <script type="module" src="{{ asset('js/employees.js') }}"></script>
@endsection
