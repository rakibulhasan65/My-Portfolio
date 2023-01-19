@extends('backend/layouts/master')
@push('css')
    <link rel="stylesheet" href="{{ asset('backend/assets') }}/dist/css/customStyle.css">
@endpush
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                {{-- Main Body Container Section Satrt Dashboard  --}}

                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h5>Education Information</h5>
                        </div>
                        <button class="btn btn-info float-right" data-toggle="modal" data-target="#educationAdd">Add
                            Education</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped dataTable dtr-inline">
                            <thead>
                                <tr>
                                    <th>Experience Title</th>
                                    <th>Company Name</th>
                                    <th>Years</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($experienceShowData as $showExp)
                                    <tr>
                                        <td>{{ $showExp->experienceTitle }}</td>
                                        <td>{{ $showExp->companyName }}</td>
                                        <td>{{ $showExp->years }}</td>
                                        <td>{{ $showExp->description }}</td>
                                        <td>
                                            {{-- switch  --}}
                                            <label class="switch mt-2">
                                                <input type="checkbox" id="eduSwitch">
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <button class="text-danger btn px-1 btn-lg" data-toggle="modal"
                                                data-target="#eduDeleteModal-{{ $showExp->id }}"><i
                                                    class="fas fa-trash"></i></button>
                                            <button class="btn text-info px-1 btn-lg" data-toggle="modal"
                                                data-target="#educationUpdate-{{ $showExp->id }}"><i
                                                    class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>

 
                                    {{-- Education Update Form  --}}
                                @endforeach
                            </tbody>

                        </table>

                        {{-- Education Add Form  --}}
                        <div class="modal fade" id="educationAdd">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header bg-info">
                                        <h4 class="modal-title">Add Experiences</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ Route('experiences.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <div class="modal-body">
                                            <div class="m-4">
                                                {{-- Education Title  --}}
                                                <div class="row form-group">
                                                    <div class="col-2">
                                                        <label for="experienceTitle">Experience Title</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="experienceTitle"
                                                            placeholder="Education Title">
                                                    </div>
                                                </div>
                                                {{-- Institute Name --}}
                                                <div class="row form-group">
                                                    <div class="col-2">
                                                        <label for="companyName">Institute Name</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="companyName"
                                                            placeholder="Company Name">
                                                    </div>
                                                </div>
                                                {{-- Passing Years  --}}
                                                <div class="row form-group">
                                                    <div class="col-2">
                                                        <label for="years">Years</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="years"
                                                            placeholder="Years">
                                                    </div>
                                                </div>
                                                {{-- Description  --}}
                                                <div class="row form-group">
                                                    <div class="col-2">
                                                        <label for="description">Description</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <textarea class="form-control" name="description" id="" cols="10" rows="5"
                                                            placeholder="Description"></textarea>
                                                    </div>
                                                </div>

                                                {{-- Status  --}}
                                                <div class="row form-group">
                                                    <div class="col-2">
                                                        <label for="description">Status</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <select name="status" class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="form-control btn btn-info">Save</button>
                                        </div>
                                    </form>

                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        {{-- Education Add Form  --}}
                    </div>
                </div>
                {{-- Main Body Container Section End Dashboard  --}}

            </div>
        </section>

    </div>
@endsection
