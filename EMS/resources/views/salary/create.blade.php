@extends('master')
@section('content')

    <div class="pcoded-content">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-watch bg-c-blue"></i>
                        <div class="d-inline">
                            <h5>Create Salary</h5>
                            <span>Salary List</span>
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
                                        <h5>Salary Input</h5>
                                        <div class="card-block">
                                            <form action="{{ route('salary.store') }}" method="POST">
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Release Date:</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control" name="release_date">
                                                        <span
                                                            class="text-danger">{{ $errors->first('release_date') }}</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Paid Date:</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control" name="paid_date">
                                                        <span class="text-danger">{{ $errors->first('paid_date') }}</span>
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
                                                    <label class="col-sm-2 col-form-label">Note:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="note">
                                                        <span class="text-danger">{{ $errors->first('note') }}</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Employee Id:</label>
                                                    <div class="col-sm-10">
                                                        <select name="employee_id">
                                                            <option value="id">id</option>
                                                            @foreach ($employees as $employee)
                                                                <option value="{{ $employee->id }}">{{ $employee->id }}
                                                                </option>
                                                            @endforeach

                                                        </select>
                                                        <span
                                                            class="text-danger">{{ $errors->first('employee_id') }}</span>
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
