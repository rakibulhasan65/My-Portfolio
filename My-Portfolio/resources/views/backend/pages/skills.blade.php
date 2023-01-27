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
                            <h5>Experience Information</h5>
                        </div>
                        <button class="btn btn-info float-right" data-toggle="modal" data-target="#experienceAdd">Add
                            Experience</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped dataTable dtr-inline">
                            <thead>
                                <tr>
                                    <th>Experience Title</th>
                                    <th>Organization Name</th>
                                    <th>Years</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hello</td>
                                    <td>Hello</td>
                                    <td>Hello</td>
                                    <td>Hello</td>
                                    <td>Hello</td>
                                    <td>Hello</td>
                                </tr>
                            </tbody>

                        </table>

                        {{-- Education Add Form  --}}
                        <div class="modal fade" id="experienceAdd">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
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
                                                {{-- Experience Title  --}}
                                                <div class="row form-group">
                                                    <div class="col-2">
                                                        <label for="experienceTitle">Experience Title</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="experienceTitle"
                                                            placeholder="Experience Title">
                                                    </div>
                                                </div>
                                                {{-- Organization Name --}}
                                                <div class="row form-group">
                                                    <div class="col-2">
                                                        <label for="companyName">Organization Name</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="companyName"
                                                            placeholder="Organization Name">
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
                                                <div class="d-flex justify-content-end">
                                                     <button type="submit" class="btn btn-info">Save</button>
                                                </div>
                                            </div>
                                           
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
