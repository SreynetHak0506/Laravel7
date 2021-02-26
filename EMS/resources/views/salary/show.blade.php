@extends('master')
@section('content')

    <div class="pcoded-content">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-watch bg-c-blue"></i>
                        <div class="d-inline">
                            <h5> Salary</h5>
                            <span>Show Salary</span>
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
                                <a href="{{ route('salary.index') }}">salary</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('salary.create') }}">Create</a>
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
                                            <form action="{{ route('salary.index') }}">
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Release Date:</label>
                                                    <div class="col-sm-10">
                                                        <label
                                                            class="col-sm-2 col-form-label">{{ $data->release_date }}</label>
                                                        {{-- <input type="date" class="form-control" name="release_date" value="{{$data->release_date}}"> --}}
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Paid Date:</label>
                                                    <div class="col-sm-10">
                                                        <label
                                                            class="col-sm-2 col-form-label">{{ $data->paid_date }}</label>
                                                        {{-- <input type="date" class="form-control" name="paid_date" value="{{$data->paid_date}}"> --}}
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Basic Salary:</label>
                                                    <div class="col-sm-10">
                                                        <label
                                                            class="col-sm-2 col-form-label">{{ $data->basic_salary }}</label>
                                                        {{-- <input type="double" class="form-control" name="basic_salary" value="{{$data->basic_salary}}"> --}}
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Note:</label>
                                                    <div class="col-sm-10">
                                                        <label class="col-sm-2 col-form-label">{{ $data->note }}</label>
                                                        {{-- <input type="text" class="form-control" name="note" value="{{$data->note}}"> --}}
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Employee Id:</label>
                                                    <div class="col-sm-10">
                                                        <label
                                                            class="col-sm-2 col-form-label">{{ $data->employee->emp_name }}</label>
                                                        {{-- <input type="text" class="form-control" name="employee_id" value="{{$data->employee_id}}"> --}}
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
