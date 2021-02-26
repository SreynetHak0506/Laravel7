@extends('master')
@section('content')

    <div class="pcoded-content">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-watch bg-c-blue"></i>
                        <div class="d-inline">
                            <h5> Employee</h5>
                            <span>Show employee</span>
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
                                        <h5>Show Detail</h5>
                                        <div class="card-block">
                                            <form action="{{ route('employee.index') }}">
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Employee Code:</label>
                                                    <div class="col-sm-6">
                                                        <label>{{ $data->emp_code }}</label>
                                                        {{-- <input type="text" class="form-control" name="emp_code" value="{{$data->emp_code}}"> --}}
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Employee Name:</label>
                                                    <div class="col-sm-6">
                                                        <label>{{ $data->emp_name }}</label>
                                                        {{-- <input type="text" class="form-control" name="emp_name" value="{{$data->emp_name}}"> --}}
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Gender:</label>
                                                    <div class="col-sm-6">
                                                        <label>{{ $data->gender }}</label>
                                                        {{-- <input type="text" class="form-control" name="gender" value="{{$data->gender}}"> --}}
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Date of Birth:</label>
                                                    <div class="col-sm-6">
                                                        <label>{{ $data->dob }}</label>
                                                        {{-- <input type="text" class="form-control" name="dob" value="{{$data->dob}}"> --}}
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Marital Status:</label>
                                                    <div class="col-sm-6">
                                                        <label>{{ $data->marital_status }}</label>
                                                        {{-- <input type="text" class="form-control" name="marital_status" value="{{$data->marital_status}}"> --}}
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Basis Salary:</label>
                                                    <div class="col-sm-6">
                                                        <label>{{ $data->basic_salary }}</label>
                                                        {{-- <input type="text" class="form-control" name="basic_salary" value="{{$data->basic_salary}}"> --}}
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Joining Date:</label>
                                                    <div class="col-sm-6">
                                                        <label>{{ $data->joining_date }}</label>
                                                        {{-- <input type="text" class="form-control" name="joining_date" value="{{$data->joining_date}}"> --}}
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Leaving Date:</label>
                                                    <div class="col-sm-6">
                                                        <label>{{ $data->leaving_date }}</label>
                                                        {{-- <input type="text" class="form-control" name="leaving_date" value="{{$data->leaving_date}}"> --}}
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Email:</label>
                                                    <div class="col-sm-6">
                                                        <label>{{ $data->email }}</label>
                                                        {{-- <input type="text" class="form-control" name="email" value="{{$data->email}}"> --}}
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Phone Number:</label>
                                                    <div class="col-sm-6">
                                                        <label>{{ $data->phone }}</label>
                                                        {{-- <input type="text" class="form-control" name="phone" value="{{$data->phone}}"> --}}
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Address:</label>
                                                    <div class="col-sm-6">
                                                        <label>{{ $data->address }}</label>
                                                        {{-- <input type="text" class="form-control" name="address" value="{{$data->address}}"> --}}
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Other:</label>
                                                    <div class="col-sm-6">
                                                        <label>{{ $data->other }}</label>
                                                        {{-- <input type="text" class="form-control" name="other" value="{{$data->other}}"> --}}
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Photo:</label>
                                                    <div class="col-sm-6">
                                                        <img src="{{ asset('public/images/' . $data->photo) }}"
                                                            width="80" style="border-radius: 65px;" height="80">

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Department Id:</label>
                                                    <div class="col-sm-6">
                                                        <label>{{ $data->department->department }}</label>
                                                        {{-- <input type="text" class="form-control" name="department_id" value="{{$data->department_id}}"> --}}
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Position Id:</label>
                                                    <div class="col-sm-6">
                                                        <label>{{ $data->position->position }}</label>
                                                        {{-- <input type="text" class="form-control" name="position_id" value="{{$data->position_id}}"> --}}
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-danger pull-right "><i
                                                                class="fa fa-close "></i>Cancel</button>
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
