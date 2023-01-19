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
                                @foreach ($experienceShowData as $showExp)
                                    <tr>
                                        <td>{{ $showExp->experienceTitle }}</td>
                                        <td>{{ $showExp->companyName }}</td>
                                        <td>{{ $showExp->years }}</td>
                                        <td>{{ $showExp->description }}</td>
                                        <td>
                                            {{-- switch  --}}
                                            <label class="switch mt-2">
                                                <input type="checkbox" id="expSwitch">
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <button class="text-danger btn px-1 btn-lg" data-toggle="modal"
                                                data-target="#expDeleteModal-{{ $showExp->id }}"><i
                                                    class="fas fa-trash"></i></button>
                                            <button class="btn text-info px-1 btn-lg" data-toggle="modal"
                                                data-target="#experienceUpdate-{{ $showExp->id }}"><i
                                                    class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    {{-- Experience Item Delete Modal  --}}
                                    <div class="modal fade" id="expDeleteModal-{{ $showExp->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Item Delete Confirmation
                                                        Message ! </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure confirm this item !
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary"
                                                        data-dismiss="modal">No</button>
                                                    <form method="POST"
                                                        action="{{ Route('experiences.destroy', $showExp->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Yes</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- / Experience Item Delete Modal  --}}

                                    {{-- Experience Update Form  --}}
                                    <div class="modal fade" id="experienceUpdate-{{ $showExp->id }}">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header bg-info">
                                                    <h4 class="modal-title">Update Experiences</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <form action="{{ Route('experiences.update', $showExp->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="m-4">
                                                            {{-- Experience Title  --}}
                                                            <div class="row form-group">
                                                                <div class="col-2">
                                                                    <label for="experienceTitle">Experience Title</label>
                                                                </div>
                                                                <div class="col-10">
                                                                    <input type="text" class="form-control"
                                                                        name="experienceTitle"
                                                                        placeholder="Experience Title"
                                                                        value="{{ $showExp->experienceTitle }}">
                                                                </div>
                                                            </div>
                                                            {{-- Organization Name --}}
                                                            <div class="row form-group">
                                                                <div class="col-2">
                                                                    <label for="companyName">Organization Name</label>
                                                                </div>
                                                                <div class="col-10">
                                                                    <input type="text" class="form-control"
                                                                        name="companyName" placeholder="Organization Name"
                                                                        value="{{ $showExp->companyName }}">
                                                                </div>
                                                            </div>
                                                            {{--  Years  --}}
                                                            <div class="row form-group">
                                                                <div class="col-2">
                                                                    <label for="years">Years</label>
                                                                </div>
                                                                <div class="col-10">
                                                                    <input type="text" class="form-control"
                                                                        name="years" placeholder="Years"
                                                                        value="{{ $showExp->years }}">
                                                                </div>
                                                            </div>
                                                            {{-- Description  --}}
                                                            <div class="row form-group">
                                                                <div class="col-2">
                                                                    <label for="description">Description</label>
                                                                </div>
                                                                <div class="col-10">
                                                                    <textarea class="form-control" name="description" id="" cols="10" rows="5"
                                                                        placeholder="Description">{{ $showExp->description }}</textarea>
                                                                </div>
                                                            </div>

                                                            {{-- Status  --}}
                                                            <div class="row form-group">
                                                                <div class="col-2">
                                                                    <label for="description">Status</label>
                                                                </div>
                                                                <div class="col-10">
                                                                    <select name="status" class="form-control">
                                                                        <option value="{{ $showExp->status }}">
                                                                            @if ($showExp->status == 1)
                                                                                Active
                                                                            @else
                                                                                Inactive
                                                                            @endif
                                                                        </option>
                                                                        <option value="1">Active</option>
                                                                        <option value="0">Inactive</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit"
                                                            class="form-control btn btn-info">Update</button>
                                                    </div>
                                                </form>

                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    {{-- Education Update Form  --}}
                                @endforeach
                            </tbody>

                        </table>

                        {{-- Education Add Form  --}}
                        <div class="modal fade" id="experienceAdd">
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
