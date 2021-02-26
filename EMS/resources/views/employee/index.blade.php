@extends('master')
@section('content')

    <div class="pcoded-content">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-watch bg-c-blue"></i>
                        <div class="d-inline">
                            <h5>Employee</h5>
                            <span>List all employee</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index.html"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('employee.index') }}">deparment</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Employee Table</h5>
                                        <span>use class <code>table-hover</code> inside table element</span>
                                        <div class="card-header-right">
                                            <a href="{{ route('employee.create') }}" class="btn btn-success "><i
                                                    class="fa fa-plus-circle "></i>Create</a>
                                        </div>
                                    </div>
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <table class="table  table-bordered table-striped">
                                                @if (session()->get('success'))
                                                    <div class="alert alert-success">
                                                        {{ session()->get('success') }}
                                                    </div>
                                                @endif
                                                @if (session()->get('danger'))
                                                    <div class="alert alert-danger">
                                                        {{ session()->get('danger') }}
                                                    </div>
                                                @endif
                                                <thead style=" background:orange">
                                                    <tr style="color:white">
                                                        <th>#</th>
                                                        <th>Employee code</th>
                                                        <th>Employee Name</th>
                                                        <th>Gender</th>
                                                        <th>Day Of Birth</th>
                                                        {{-- <th>Marital Status</th>
                                                    <th>Basis Salary</th>
                                                    <th>Joining Date</th>
                                                    <th>Leaving Date</th> --}}
                                                        <th>Email</th>
                                                        <th>Phone Number</th>
                                                        <th>Address</th>
                                                        {{-- <th>Other</th> --}}
                                                        <th>Photo</th>
                                                        <th>Department Id</th>
                                                        <th>Position Id</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $i = 1;
                                                    @endphp
                                                    @foreach ($data as $employee)
                                                        <tr>
                                                            <th scope="row">{{ $i++ }}</th>
                                                            <td>{{ $employee->emp_code }}</td>
                                                            <td>{{ $employee->emp_name }}</td>
                                                            <td>{{ $employee->gender }}</td>
                                                            <td>{{ $employee->dob }}</td>
                                                            {{-- <td>{{$employee->marital_status}}</td>
                                                    <td>{{$employee->basic_salary}}</td>
                                                    <td>{{$employee->joining_date}}</td>
                                                    <td>{{$employee->leaving_date}}</td> --}}
                                                            <td>{{ $employee->email }}</td>
                                                            <td>{{ $employee->phone }}</td>
                                                            <td>{{ $employee->address }}</td>
                                                            {{-- <td>{{$employee->other}}</td> --}}

                                                            <td> <img
                                                                    src="{{ asset('public/images/' . $employee->photo) }}"
                                                                    width="70" style="border-radius: 25px;" height="70">
                                                            </td>
                                                            <td style="color:rgb(5, 205, 231)">
                                                                {{ $employee->department->department }}</td>
                                                            <td style="color: rgb(183, 12, 235)">
                                                                {{ $employee->position->position }}</td>
                                                            <td>
                                                                <a href="{{ route('employee.edit', $employee->id) }}"
                                                                    class="btn btn-warning btn-sm">
                                                                    <i class="fa fa-edit "></i>Edit</a>
                                                                <a href="{{ route('employee.destroy', $employee->id) }}"
                                                                    class="btn btn-danger btn-sm">
                                                                    <i class="fa fa-trash "></i>Delete</a>
                                                                <a href="{{ route('employee.show', $employee->id) }}"
                                                                    class="btn btn-primary btn-sm">
                                                                    <i class="fa fa-eye "></i>Show</a>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
