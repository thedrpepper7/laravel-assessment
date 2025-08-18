@extends('layouts.app')

@section('title', 'Employees')

@section('content')

    <form class="employeeInsertForm" method="POST" action=" {{ route('insertEmployee') }}">
    
        @csrf
        <h1>Employee Insert</h1>
        <input type="text" name="first_name" placeholder="First Name *" required>
        <input type="text" name="last_name" placeholder="Last Name *" required>
        <input type="text" name="company" placeholder="Company">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="phone_number" placeholder="Phone Number">
        <div class="employeeInsertFormBTNs">
            <button type="submit" id="submitEmployeeForm">Add Entry</button>
            <button type="button" id="closeEmployeeForm">Clear</button>
        </div>
    </form>
    <h1>List of Employees</h1>
    <div class="employeeGrid">
        @foreach ($employees as $employee)
            <div class="employeeDiv">
                <p>{{ $employee->first_name }} {{ $employee->last_name }} of {{ $employee->company}}</p> 
                <div class="employeeBTNs">
                <button>Contact Information:</button>
                <form method="POST" action="{{ route('deleteEmployee') }}" class="deleteForm">
                    @csrf
                    <input type="hidden" name="id" value="{{ $employee->id }}">
                    <button class="deleteEmployee icomoon">Delete</button>
                </form>
                </div>
                <div class="hiddenContact">
                    <p>Email: [{{ $employee->email}}] </p> 
                    <p>Phone Number: [{{ $employee->phone_number }}] </p> 
                </div>
                
            </div>
        @endforeach
    </div>
    <script type="module" src="{{ asset('js/employees.js') }}"></script>
@endsection
