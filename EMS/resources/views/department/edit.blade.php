@extends('master')
@section('content')

    <div class="pcoded-content">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-watch bg-c-blue"></i>
                        <div class="d-inline">
                            <h5>Edit Department</h5>
                            <span>Department edit List</span>
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
                                <a href="{{ route('department.index') }}">Department</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="">Edit</a>
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
                                        <h5> Form Update</h5>
                                        <div class="card-block">
                                            <form action="{{ route('department.update', $data->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Department</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control"
                                                            value="{{ $data->department }}" name="department">
                                                        <span
                                                            class="text-danger">{{ $errors->first('department') }}</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Note</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{ $data->note }}"
                                                            name="note">
                                                        <span class="text-danger">{{ $errors->first('note') }}</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-primary pull-right "><i
                                                                class="fa fa-edit "></i>Update</button>
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
