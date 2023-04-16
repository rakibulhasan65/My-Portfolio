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
                        <h2 class="m-0">Client Review</h2>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ Route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Technical Support</li>
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
                            data-target="#addSupportTeam"><i class="fas fa-plus"></i> Add
                            Client</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped dataTable dtr-inline">
                            <thead>
                                <tr>
                                    <th>#Sl</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>Client Source</th>
                                    <th>Client Review</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientAllDataShow as $clientDataShow)
                                    <tr>
                                        <td>{{ $clientAllDataShow->firstItem() + $loop->index }}</td>
                                        <td><img src="{{ asset('backend/images/Client/' . $clientDataShow->image) }}"
                                                alt=""></td>
                                        <td>{{ $clientDataShow->name }}</td>
                                        <td>{{ $clientDataShow->country }}</td>
                                        <td>
                                            @if ($clientDataShow->client_source == 1)
                                                <p>Fiverr.com</p>
                                            @elseif($clientDataShow->client_source == 2)
                                                <p>Upwork.com</p>
                                            @elseif($clientDataShow->client_source == 3)
                                                <p>Freelancer.com</p>
                                            @else
                                                <p>Out Of Market Place</p>
                                            @endif
                                        </td>
                                        <td>{{ str_limit($clientDataShow->client_review, $limit = 50) }}</td>
                                        <td>
                                            {{-- switch 
                                            <label class="switch mt-2">
                                                <input type="checkbox" id="eduSwitch">
                                                <span class="slider round"></span>
                                            </label> --}}

                                            @if ($clientDataShow->status == 1)
                                                <span class="badge badge-info">Active</span>
                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button class="text-danger btn px-1 btn-lg" data-toggle="modal"
                                                data-target="#clientDeleteModal-{{ $clientDataShow->id }}"><i
                                                    class="fas fa-trash"></i></button>
                                            <button class="btn text-info px-1 btn-lg" data-toggle="modal"
                                                data-target="#clientUpdateModal-{{ $clientDataShow->id }}"><i
                                                    class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    {{-- Support Item Delete Modal  --}}
                                    <div class="modal fade" id="clientDeleteModal-{{ $clientDataShow->id }}" tabindex="-1"
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
                                                        action="{{ Route('client.destroy', $clientDataShow->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Yes</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- / Support Item Delete Modal  --}}
                                    {{-- Education Update Form  --}}
                                    <div class="modal fade" id="clientUpdateModal-{{ $clientDataShow->id }}">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Update Client</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                {{-- Technical Support Form Start  --}}
                                                <form action="{{ Route('client.update', $clientDataShow->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="m-4">
                                                            {{-- Support Iamge  --}}
                                                            <div class="row form-group">
                                                                <div class="col-2">
                                                                    <label for="image">Image</label>
                                                                </div>
                                                                <div class="col-10">
                                                                    <input type="file" class="" name="image"
                                                                        placeholder="Support Image">
                                                                    <div class="teamImage">
                                                                        <img style="margin:5px"
                                                                            src="{{ asset('backend/images/Client/' . $clientDataShow->image) }}"
                                                                            alt="{{ $clientDataShow->image }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- Name --}}
                                                            <div class="row form-group">
                                                                <div class="col-2">
                                                                    <label for="name">Name</label>
                                                                </div>
                                                                <div class="col-10">
                                                                    <input type="text" class="form-control"
                                                                        name="name" placeholder="Name"
                                                                        value="{{ $clientDataShow->name }}">
                                                                </div>
                                                            </div>
                                                            {{-- Country  --}}
                                                            <div class="row form-group">
                                                                <div class="col-2">
                                                                    <label for="country">Country</label>
                                                                </div>
                                                                <div class="col-10">
                                                                    <input type="text" class="form-control"
                                                                        name="country" placeholder="Country"
                                                                        value="{{ $clientDataShow->country }}">
                                                                </div>
                                                            </div>
                                                            {{-- Client Review  --}}
                                                            <div class="row form-group">
                                                                <div class="col-2">
                                                                    <label for="client_source">Client Source</label>
                                                                </div>
                                                                <div class="col-10">
                                                                    <select name="client_source" class="form-control">
                                                                        <option
                                                                            value="{{ $clientDataShow->client_source }}">
                                                                            @if ($clientDataShow->client_source == 1)
                                                                                <p>Fiverr.com</p>
                                                                            @elseif($clientDataShow->client_source == 2)
                                                                                <p>Upwork.com</p>
                                                                            @elseif($clientDataShow->client_source == 3)
                                                                                <p>Freelancer.com</p>
                                                                            @else
                                                                                <p>Out Of Market Place</p>
                                                                            @endif
                                                                        </option>
                                                                        <option value="1">Fiverr.com</option>
                                                                        <option value="2">Upwork.com</option>
                                                                        <option value="3">Freelancer.com</option>
                                                                        <option value="4">Out Of Market Place
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            {{-- Client Review  --}}
                                                            <div class="row form-group">
                                                                <div class="col-2">
                                                                    <label for="client_review">Client Review</label>
                                                                </div>
                                                                <div class="col-10">
                                                                    <textarea class="form-control" name="client_review" cols="10" rows="5" placeholder="Client Review">{{ $clientDataShow->client_review }}</textarea>
                                                                </div>
                                                            </div>

                                                            {{-- Status  --}}
                                                            <div class="row form-group">
                                                                <div class="col-2">
                                                                    <label for="description">Status</label>
                                                                </div>
                                                                <div class="col-10">
                                                                    <select name="status" class="form-control">
                                                                        <option value="{{ $clientDataShow->status }}">
                                                                            @if ($clientDataShow->status == 1)
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
                        {{-- TechnicalSupport Section Add to Pagination Start --}}
                        <div class="clientPaginate mt-3">
                            <span
                                class="page-numbers current">{{ $clientAllDataShow->links('pagination::bootstrap-5') }}</span>
                        </div>
                        {{-- TechnicalSupport Section Add to Pagination End --}}
                        {{-- Support Add Form  --}}
                        <div class="modal fade" id="addSupportTeam">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Client</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ Route('client.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <div class="modal-body">
                                            <div class="m-4">
                                                {{--  Iamge  --}}
                                                <div class="row form-group">
                                                    <div class="col-2">
                                                        <label for="image">Image</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="file" class="" name="image"
                                                            placeholder="Support Image">
                                                    </div>
                                                </div>
                                                {{-- Name --}}
                                                <div class="row form-group">
                                                    <div class="col-2">
                                                        <label for="name">Name</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="name"
                                                            placeholder="Name">
                                                    </div>
                                                </div>
                                                {{-- Country  --}}
                                                <div class="row form-group">
                                                    <div class="col-2">
                                                        <label for="country">country</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="country"
                                                            placeholder="Country">
                                                    </div>
                                                </div>
                                                {{-- Client Review  --}}
                                                <div class="row form-group">
                                                    <div class="col-2">
                                                        <label for="client_source">Client Source</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <select name="client_source" class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="1">Fiverr.com</option>
                                                            <option value="2">Upwork.com</option>
                                                            <option value="3">Freelancer.com</option>
                                                            <option value="4">Out Of Market Place
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                {{-- CLient Review  --}}
                                                <div class="row form-group">
                                                    <div class="col-2">
                                                        <label for="client_review">Client Review</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <textarea class="form-control" name="client_review" cols="10" rows="5" placeholder="Client Review"></textarea>
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
                                            <div class="d-flex justify-content-end">
                                                <button type="submit" class="btn btn-info">Save</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        {{-- Support Add Form  --}}
                    </div>
                </div>
                {{-- Main Body Container Section End Dashboard  --}}

            </div>
        </section>

    </div>
@endsection
