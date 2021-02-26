@extends('master')
@section('content')

    <div class="pcoded-content">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-watch bg-c-blue"></i>
                        <div class="d-inline">
                            <h5>Position</h5>
                            <span>List all position</span>
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
                                <a href="{{ route('position.create') }}">position</a>
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
                                        <h5>Position Table</h5>
                                        <div class="card-header-right">
                                            <a href="{{ route('position.create') }}" class="btn btn-success "><i
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
                                                <thead style="background:rgb(3, 92, 119)">
                                                    <tr style="color: white">
                                                        <th>#</th>
                                                        <th>Position</th>
                                                        <th>Note</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $i = 1;
                                                    @endphp
                                                    @foreach ($data as $position)
                                                        <tr>
                                                            <th scope="row">{{ $i++ }}</th>
                                                            <td>{{ $position->position }}</td>
                                                            <td>{{ $position->note }}</td>
                                                            <td>
                                                                <a href="{{ route('position.edit', $position->id) }}"
                                                                    class="btn btn-warning btn-sm">
                                                                    <i class="fa fa-edit "></i>Edit</a>
                                                                <a href="{{ route('position.destroy', $position->id) }}"
                                                                    class="btn btn-danger btn-sm">
                                                                    <i class="fa fa-trash "></i>Delete</a>
                                                                <a href="{{ route('position.show', $position->id) }}"
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
