@extends('master')
@section('content')

    <div class="pcoded-content">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-watch bg-c-blue"></i>
                        <div class="d-inline">
                            <h5>Salary</h5>
                            <span>List all Salary</span>
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
                                <a href="{{ route('salary.index') }}">Salary</a>
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
                                        <h5>Salary Table</h5>
                                        <span>use class <code>table-hover</code> inside table element</span>
                                        <div class="card-header-right">
                                            <a href="{{ route('salary.create') }}" class="btn btn-success "><i
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
                                                <thead style="background: rgb(2, 90, 83)">
                                                    <tr style="color: white">
                                                        <th>#</th>
                                                        <th>Release Date</th>
                                                        <th>Paid Date</th>
                                                        <th>Basic Salary</th>
                                                        <th>Note</th>
                                                        <th>Employee Id</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $i = 1;
                                                    @endphp
                                                    @foreach ($data as $salary)
                                                        <tr>
                                                            <th scope="row">{{ $i++ }}</th>
                                                            <td>{{ $salary->paid_date }}</td>
                                                            <td>{{ $salary->paid_date }}</td>
                                                            <td>{{ $salary->basic_salary }}</td>
                                                            <td>{{ $salary->note }}</td>
                                                            <td style="color: rgb(6, 117, 245)">
                                                                {{ $salary->employee->emp_name }}
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('salary.edit', $salary->id) }}"
                                                                    class="btn btn-warning btn-sm">
                                                                    <i class="fa fa-edit "></i>Edit</a>
                                                                <a href="{{ route('salary.destroy', $salary->id) }}"
                                                                    class="btn btn-danger btn-sm">
                                                                    <i class="fa fa-trash "></i>Delete</a>
                                                                <a href="{{ route('salary.show', $salary->id) }}"
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
