@extends('master')
@section('content')

    <div class="pcoded-content">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-watch bg-c-blue"></i>
                        <div class="d-inline">
                            <h5>Create Employee</h5>
                            <span>Employee List</span>
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
                                <a href="{{ route('employee.index') }}">Employee</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('employee.create') }}">Create</a>
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
                                        <h5>Basic Form Inputs</h5>
                                        <div class="card-block">
                                            <form action="{{ route('employee.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Employee Code:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="emp_code">
                                                        <span class="text-danger">{{ $errors->first('emp_code') }}</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Employee Name:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="emp_name">
                                                        <span class="text-danger">{{ $errors->first('emp_name') }}</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Gender:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="gender">
                                                        <span class="text-danger">{{ $errors->first('gender') }}</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Date of Birth:</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control" name="dob">
                                                        <span class="text-danger">{{ $errors->first('dob') }}</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Marital Status:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="marital_status">
                                                        <span
                                                            class="text-danger">{{ $errors->first('marital_status') }}</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Basic Salary:</label>
                                                    <div class="col-sm-10">
                                                        <input type="double" class="form-control" name="basic_salary">
                                                        <span
                                                            class="text-danger">{{ $errors->first('basic_salary') }}</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Joining Date:</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control" name="joining_date">
                                                        <span
                                                            class="text-danger">{{ $errors->first('joining_date') }}</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Leaving Date:</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control" name="leaving_date">

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Email:</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" name="email">
                                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Phone Number:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="phone">
                                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Address:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="address">
                                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Other:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="other">

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Photo:</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control" name="file">
                                                        <span class="text-danger">{{ $errors->first('file') }}</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">department Id:</label>
                                                    <div class="col-sm-10">
                                                        <select name="department_id">
                                                            <option value="id">Id</option>
                                                            @foreach ($departments as $department)
                                                                <option value="{{ $department->id }}">
                                                                    {{ $department->id }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <span
                                                            class="text-danger">{{ $errors->first('department_id') }}</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Position Id:</label>
                                                    <div class="col-sm-10">
                                                        <select name="position_id">
                                                            <option value="id">Id</option>
                                                            @foreach ($positions as $position)
                                                                <option value="{{ $position->id }}">
                                                                    {{ $position->id }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <span
                                                            class="text-danger">{{ $errors->first('position_id') }}</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-primary pull-right "><i
                                                                class="fa fa-plus-circle "></i>Save</button>
                                                    </div>
                                                </div>
                                            </form>
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
    </div>
@endsection
