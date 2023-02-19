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
                            <li class="breadcrumb-item"><a href="{{ Route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Education</li>
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
                        <button class="btn btn-info float-right font-weight-bold" data-toggle="modal"
                            data-target="#educationAdd">
                            <i class="fas fa-plus"></i> Add
                            Education</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped dataTable dtr-inline">
                            <thead class="border-bottom-0">
                                <tr>
                                    <th>Education Title</th>
                                    <th>Education Institute</th>
                                    <th>Passing Years</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($educationDataShow as $showEdu)
                                    <tr>
                                        <td>{{ $showEdu->educationTitle }}</td>
                                        <td>{{ $showEdu->instituteName }}</td>
                                        <td>{{ $showEdu->passingYears }}</td>
                                        <td>{{ $showEdu->description }}</td>
                                        <td>
                                            {{-- switch  --}}
                                            <label class="switch mt-2">
                                                <input type="checkbox" id="eduSwitch">
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <button class="text-danger btn px-1 btn-lg" data-toggle="modal"
                                                data-target="#eduDeleteModal-{{ $showEdu->id }}"><i
                                                    class="fas fa-trash"></i></button>
                                            <button class="btn text-info px-1 btn-lg" data-toggle="modal"
                                                data-target="#educationUpdate-{{ $showEdu->id }}"><i
                                                    class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>

                                    {{-- Education Item Delete Modal  --}}
                                    <div class="modal fade" id="eduDeleteModal-{{ $showEdu->id }}" tabindex="-1"
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
                                                        action="{{ Route('educations.destroy', $showEdu->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Yes</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- / Education Item Delete Modal  --}}

                                    {{-- Education Update Form  --}}
                                    <div class="modal fade" id="educationUpdate-{{ $showEdu->id }}">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Update Education</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <form action="{{ Route('educations.update', $showEdu->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="m-4">
                                                            {{-- Education Title  --}}
                                                            <div class="row form-group">
                                                                <div class="col-2">
                                                                    <label for="educationTitle">Education Title</label>
                                                                </div>
                                                                <div class="col-10">
                                                                    <input type="text" class="form-control"
                                                                        name="educationTitle" placeholder="Education Title"
                                                                        value="{{ $showEdu->educationTitle }}">
                                                                </div>
                                                            </div>
                                                            {{-- Institute Name --}}
                                                            <div class="row form-group">
                                                                <div class="col-2">
                                                                    <label for="instituteName">Institute Name</label>
                                                                </div>
                                                                <div class="col-10">
                                                                    <input type="text" class="form-control"
                                                                        name="instituteName" placeholder="Institute Name"
                                                                        value="{{ $showEdu->instituteName }}">
                                                                </div>
                                                            </div>
                                                            {{-- Passing Years  --}}
                                                            <div class="row form-group">
                                                                <div class="col-2">
                                                                    <label for="passingYears">Passing Years</label>
                                                                </div>
                                                                <div class="col-10">
                                                                    <input type="text" class="form-control"
                                                                        name="passingYears" placeholder="Passing Years"
                                                                        value="{{ $showEdu->passingYears }}">
                                                                </div>
                                                            </div>
                                                            {{-- Description  --}}
                                                            <div class="row form-group">
                                                                <div class="col-2">
                                                                    <label for="description">Description</label>
                                                                </div>
                                                                <div class="col-10">
                                                                    <textarea class="form-control" name="description" id="" cols="10" rows="5"
                                                                        placeholder="Description">{{ $showEdu->description }}</textarea>
                                                                </div>
                                                            </div>

                                                            {{-- Status  --}}
                                                            <div class="row form-group">
                                                                <div class="col-2">
                                                                    <label for="description">Status</label>
                                                                </div>
                                                                <div class="col-10">
                                                                    <select name="status" class="form-control">
                                                                        <option value="{{ $showEdu->status }}">
                                                                            @if ($showEdu->status == 1)
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
                                                            <div class="d-flex justify-content-end">
                                                                <button type="submit"
                                                                    class="btn btn-info">Update</button>
                                                            </div>
                                                        </div>

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
                        <div class="modal fade" id="educationAdd">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Education</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ Route('educations.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <div class="modal-body">
                                            <div class="m-4">
                                                {{-- Education Title  --}}
                                                <div class="row form-group">
                                                    <div class="col-2">
                                                        <label for="educationTitle">Education Title</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="educationTitle"
                                                            placeholder="Education Title">
                                                    </div>
                                                </div>
                                                {{-- Institute Name --}}
                                                <div class="row form-group">
                                                    <div class="col-2">
                                                        <label for="instituteName">Institute Name</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="instituteName"
                                                            placeholder="Institute Name">
                                                    </div>
                                                </div>
                                                {{-- Passing Years  --}}
                                                <div class="row form-group">
                                                    <div class="col-2">
                                                        <label for="passingYears">Passing Years</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="passingYears"
                                                            placeholder="Passing Years">
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
                                                    <button type="submit" class=" btn btn-info">Save</button>
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
