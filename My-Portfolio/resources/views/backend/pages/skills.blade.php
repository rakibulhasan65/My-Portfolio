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
                            <li class="breadcrumb-item active">Skills</li>
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
                            <h5>Skills Manage</h5>
                        </div>
                        <button class="btn btn-info float-right" data-toggle="modal" data-target="#skillsAdd"><i
                                class="fa fa-plus px-1"></i> Add
                            Skills</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped dataTable dtr-inline">
                            <thead>

                                <tr>
                                    <th>#Sl</th>
                                    <th>Title</th>
                                    <th>Percentage</th>
                                    <th>Status</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $sl = 1;
                                @endphp
                                @foreach ($skillsDataShow as $skillsData)
                                    <tr>
                                        <td>{{ $sl }}</td>
                                        <td>{{ $skillsData->title }}</td>
                                        <td>{{ $skillsData->percentage }} %</td>
                                        <td>
                                            @if ($skillsData->status == 1)
                                                <span class="badge badge-info">Active</span>
                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-info btn-sm mx-1" data-toggle="modal"
                                                data-target="#skillsUpdate-{{ $skillsData->id }}"><i
                                                    class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger btn-sm mx-1" data-toggle="modal"
                                                data-target="#skillsDeleteModal-{{ $skillsData->id }}"><i
                                                    class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @php
                                        $sl++;
                                    @endphp
                                    <!--===========================================
                                                    Delete Skills Modal
                                                    =========================================-->
                                    <div class="modal fade" id="skillsDeleteModal-{{ $skillsData->id }}" tabindex="-1"
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
                                                        action="{{ Route('skills.destroy', $skillsData->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Yes</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!- //--------Skills Delete Modal----------->

                                        <!--===========================================
                                                    Update Skills Modal
                                                    =========================================-->
                                        <div class="modal fade" id="skillsUpdate-{{ $skillsData->id }}">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Update Skills</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ Route('skills.update', $skillsData->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="m-4">
                                                                {{-- Title  --}}
                                                                <div class="row form-group">
                                                                    <div class="col-2">
                                                                        <label for="title">Title</label>
                                                                    </div>
                                                                    <div class="col-10">
                                                                        <input type="text" class="form-control"
                                                                            name="title" placeholder="Title"
                                                                            value="{{ $skillsData->title }}">
                                                                    </div>
                                                                </div>
                                                                {{-- Percentage --}}
                                                                <div class="row form-group">
                                                                    <div class="col-2">
                                                                        <label for="percentage">Percentage</label>
                                                                    </div>
                                                                    <div class="col-10">
                                                                        <input type="text" class="form-control"
                                                                            name="percentage" placeholder="Percentage"
                                                                            value="{{ $skillsData->percentage }}">
                                                                    </div>
                                                                </div>

                                                                {{-- Status  --}}
                                                                <div class="row form-group">
                                                                    <div class="col-2">
                                                                        <label for="status">Status</label>
                                                                    </div>
                                                                    <div class="col-10">
                                                                        <select name="status" class="form-control">
                                                                            <option value="{{ $skillsData->status }}">
                                                                                @if ($skillsData->status == 1)
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
                                                                        class="btn btn-info">Save</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </form>

                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!- //--------Skills Delete Modal----------->
                                            {{-- Skills Update Form  --}}
                                @endforeach

                            </tbody>

                        </table>

                        <!--===========================================
                                                    Add Skills Modal
                                                    =========================================-->
                        <div class="modal fade" id="skillsAdd">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Skills</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ Route('skills.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <div class="modal-body">
                                            <div class="m-4">
                                                {{-- Title  --}}
                                                <div class="row form-group">
                                                    <div class="col-2">
                                                        <label for="title">Title</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="title"
                                                            placeholder="Title">
                                                    </div>
                                                </div>
                                                {{-- Percentage --}}
                                                <div class="row form-group">
                                                    <div class="col-2">
                                                        <label for="percentage">Percentage</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="percentage"
                                                            placeholder="Percentage">
                                                    </div>
                                                </div>

                                                {{-- Status  --}}
                                                <div class="row form-group">
                                                    <div class="col-2">
                                                        <label for="status">Status</label>
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
                        {{-- Skills Add Form  --}}
                    </div>
                </div>
                {{-- Main Body Container Section End Dashboard  --}}

            </div>
        </section>

    </div>
@endsection
