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
                        <h2 class="m-0">Services</h2>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ Route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Services</li>
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
                        <button class="btn btn-info float-right font-weight-bold" data-toggle="modal"
                            data-target="#sevicesAdd"><i class="fas fa-plus"></i> Add
                            Services</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped dataTable dtr-inline">
                            <thead>
                                <tr>
                                    <th>#Sl</th>
                                    <th>Services Image</th>
                                    <th>Services Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($servicesDataShow as $servicesShow)
                                    <tr>
                                        <td>{{ $servicesDataShow->firstItem() + $loop->index }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <img src="{{ asset('backend/images/Services/' . $servicesShow->ServicesImage) }}"
                                                    alt="{{ $servicesShow->ServicesImage }}" style="width: 100px;">
                                            </div>
                                        </td>
                                        <td>{{ $servicesShow->serviceTitle }}</td>
                                        <td>{{ str_limit($servicesShow->serviceDescription, $limit = 50) }}</td>
                                        <td>
                                            {{-- switch
                                            <label class="switch mt-2">
                                                <input type="checkbox" id="expSwitch">
                                                <span class="slider round"></span>
                                            </label> --}}
                                            @if ($servicesShow->status == 1)
                                                <span class="badge badge-info">Active</span>
                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button class="text-danger btn px-1 btn-lg" data-toggle="modal"
                                                data-target="#serviceDeleteModal-{{ $servicesShow->id }}"><i
                                                    class="fas fa-trash"></i></button>
                                            <button class="btn text-info px-1 btn-lg" data-toggle="modal"
                                                data-target="#servicesUpdate-{{ $servicesShow->id }}"><i
                                                    class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    {{-- Servicess Item Delete Modal  --}}
                                    <div class="modal fade" id="serviceDeleteModal-{{ $servicesShow->id }}" tabindex="-1"
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
                                                        action="{{ Route('services.destroy', $servicesShow->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Yes</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- / services Item Delete Modal  --}}
                                    {{-- Experience Update Form  --}}
                                    <div class="modal fade" id="servicesUpdate-{{ $servicesShow->id }}">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Update Services</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ Route('services.update', $servicesShow->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="m-4">
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12">
                                                                    <!---Main Update Modal Row Start----->

                                                                    {{-- Services Title --}}
                                                                    <div class="row form-group">
                                                                        <div class="col-md-2">
                                                                            <label for="servicesTitle">Services
                                                                                Title</label>
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <input type="text" class="form-control"
                                                                                name="serviceTitle"
                                                                                placeholder="Services Title"
                                                                                value="{{ $servicesShow->serviceTitle }}">
                                                                        </div>
                                                                    </div>
                                                                    {{--  Description  --}}
                                                                    <div class="row form-group">
                                                                        <div class="col-md-2">
                                                                            <label
                                                                                for="serviceDescription">Description</label>
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <textarea class="form-control" name="serviceDescription" cols="10" rows="5" placeholder="Description">{{ $servicesShow->serviceDescription }}</textarea>
                                                                        </div>
                                                                    </div>

                                                                    {{-- Status  --}}
                                                                    <div class="row form-group">
                                                                        <div class="col-md-2">
                                                                            <label for="status">Status</label>
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <select name="status" class="form-control">
                                                                                <option
                                                                                    value="{{ $servicesShow->status }}">
                                                                                    @if ($servicesShow->status == 1)
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
                                                                <!---Main Update Modal Row End----->
                                                                <!---Left Side Input Feild End--->
                                                                <div class="col-md-6 col-sm-12">
                                                                    {{-- Services Image Input Feild  --}}
                                                                    <div class="row form-group">
                                                                        <div class="col-md-2">
                                                                            <label for="">Services Image</label>
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <div class="input-group my-1">
                                                                                <div class="input-group-prepend">
                                                                                    <span
                                                                                        class="input-group-text">Upload</span>
                                                                                </div>
                                                                                <div class="custom-file">
                                                                                    <input type="file"
                                                                                        name="ServicesImage"
                                                                                        class="custom-file-input"
                                                                                        id="inputGroupFile01">
                                                                                    <label class="custom-file-label"
                                                                                        for="inputGroupFile01">Choose
                                                                                        file</label>
                                                                                </div>
                                                                            </div>
                                                                             <div class="servicesImage">
                                                                            <img class="w-100 h-75 mt-2 "
                                                                                src="{{ asset('backend/images/Services/' . $servicesShow->ServicesImage) }}"
                                                                                alt="">
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex justify-content-end">
                                                                        <button type="submit"
                                                                            class="btn btn-info">Update</button>
                                                                    </div>
                                                                </div>
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
                        {{-- Services Pagination Start  --}}
                        <div class="servicesPaginate mt-2">
                            <span
                                class="page-numbers current">{{ $servicesDataShow->links('pagination::bootstrap-5') }}</span>
                        </div>
                        {{-- Services Pagination End  --}}
                        {{-- Services Add Form  --}}
                        <div class="modal fade" id="sevicesAdd">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Services</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ Route('services.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <div class="modal-body">
                                            <div class="m-4">
                                                {{-- Service Image Upload Add Feild  --}}
                                                <div class="row form-group">
                                                    <div class="col-md-2">
                                                        <label for="">Services Image</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="input-group my-1">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Upload</span>
                                                            </div>
                                                            <div class="custom-file">
                                                                <input type="file" name="ServicesImage"
                                                                    class="custom-file-input" id="inputGroupFile01">
                                                                <label class="custom-file-label"
                                                                    for="inputGroupFile01">Choose Service Image</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Services Title --}}
                                                <div class="row form-group">
                                                    <div class="col-2">
                                                        <label for="serviceTitle">Services Title</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="serviceTitle"
                                                            placeholder="Services Title">
                                                    </div>
                                                </div>
                                                {{-- Description  --}}
                                                <div class="row form-group">
                                                    <div class="col-2">
                                                        <label for="serviceDescription">Description</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <textarea class="form-control" name="serviceDescription" cols="10" rows="5" placeholder="Description"></textarea>
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
