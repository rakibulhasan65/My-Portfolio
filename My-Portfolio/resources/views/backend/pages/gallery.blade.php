@extends('backend/layouts/master')
@prepend('css')
    <link rel="stylesheet" href="{{ asset('backend/assets/dist/css/gallaryStyle.css') }}">
@endprepend

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard Gallery</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Gallery</li>
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
                <!-----------============================
                                                      Gallery Image
                                                        ===================================------------->

                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h5>Gallery</h5>
                        </div>
                        <button class="btn btn-info float-right" data-toggle="modal" data-target="#galleryAdd"><i
                                class="fa fa-plus mx-1"></i> Add
                            Gallery</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped dataTable dtr-inline">
                            <thead>
                                <tr>
                                    <th>#Sl</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $sl = 1;
                                @endphp
                                @foreach ($galleryData as $galleryData)
                                    <tr>
                                        <td>{{ $sl }}</td>
                                        <td>{{ $galleryData->galleryCatName ?? 'none' }}</td>
                                        <td><img style="width: 100px;"
                                                src="{{ asset('backend/images/Gallery/' . $galleryData->galleryImage) }}"
                                                alt="Gallery"></td>
                                        <td>
                                            @if ($galleryData->status == 1)
                                                <span class="badge badge-info">Active</span>
                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                        </td>

                                    </tr>
                                    @php
                                        $sl++;
                                    @endphp
                                @endforeach

                            </tbody>
                        </table>
                        <span>{{ $galleryData->links() }}</span>

                    </div>


                    {{-- Gallery Add Form  --}}
                    <div class="modal fade" id="galleryAdd">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Gallery</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ Route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="modal-body">
                                        <div class="row">
                                            {{-- Gallery Image Show Start --}}
                                            <div class="col-6">

                                                <!-- Image Field Start-->
                                                <div class="input-group my-1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" name="galleryImage[]"
                                                            class="custom-file-input" id="inputGroupFile01" multiple>
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>{{-- / Gallery Image Show End --}}

                                            {{-- Gallery Input Show Start --}}
                                            <div class="col-6">
                                                {{-- Category Name  --}}
                                                <div class="form-group">
                                                    <label for="galleryCategory">Category Name</label>
                                                    <select name="sub_category" class="form-control">
                                                        <option value="">Choice Category</option>
                                                        <option value="Web Design">Web Design</option>
                                                        <option value="Web Development">Web Development</option>
                                                        <option value="Graphices Design">Graphices Design</option>
                                                    </select>
                                                </div>
                                                {{-- Gallery Status Aria  --}}
                                                <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="">Select</option>
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>

                                                {{-- Gallery Save Button  --}}
                                                <div class="saveBtn d-flex justify-content-end">
                                                    <button class="btn btn-info">Save</button>
                                                </div>
                                            </div>{{-- / Gallery Input Show End --}}
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    {{-- Gallery Add Form  --}}
                </div>

                {{-- Main Body Container Section End Dashboard  --}}
            </div>
        </section>

    </div>
@endsection
