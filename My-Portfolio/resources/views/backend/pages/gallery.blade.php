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
                        <h2 class="m-0">Gallery</h2>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ Route('admin') }}">Home</a></li>
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
                                                                                                                                                                                         Main Body Container Section Satrt Dashboar
                                                                                                                                                                                         ===================================------------->
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-info float-right font-weight-bold" data-toggle="modal"
                                data-target="#galleryAdd"><i class="fa fa-plus mx-1"></i> Add
                            Gallery
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped dataTable dtr-inline">
                            <thead>
                            <tr>
                                <th>#Sl</th>
                                <th>Image</th>
                                <th>Image Type</th>
                                <th>Image Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($galleryAllData as $galleryData)
                                <tr>
                                    <td>{{ $galleryAllData->firstItem() + $loop->index }}</td>
                                    <td><img style="width: 100px;"
                                             src="{{ asset('backend/images/Gallery/' . $galleryData->galleryImage) }}"
                                             alt="Gallery"></td>
                                    <td>{{$galleryData->imageType}}</td>
                                    <td>{{$galleryData->imageTitle}}</td>
                                    <td>
                                        @if ($galleryData->status == 1)
                                            <span class="badge badge-info">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#galleryUpdate-{{ $galleryData->id }}"><i
                                                class="fa fa-edit"></i></button>
                                        <button class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#galleryItemDelete-{{ $galleryData->id }}"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
{{--                                 Gallery Item Delete Modal Start --}}
                                <div class="modal fade" id="galleryItemDelete-{{ $galleryData->id }}" tabindex="-1"
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
                                                        data-dismiss="modal">No
                                                </button>
                                                <form method="POST"
                                                      action="{{ Route('gallery.destroy', $galleryData->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Yes</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
{{--                                 Gallery Item Delete Modal End --}}

                                <!-------==========================
                                                                                                                                                                                                            Gallery Image Update Modal Start
                                                                                                                                                                                                              ============================----------->
                                <div class="modal fade" id="galleryUpdate-{{ $galleryData->id }}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Update Gallery</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ Route('gallery.update', $galleryData->id) }}"
                                                  method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="row">
                                                         Gallery Image Show
                                                        <div class="col-6">
                                                            <!-- Image Show -->
                                                            <div class="imageFieldAria">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        @if (!$galleryData->galleryImage == null)
                                                                            <img style="height: 165px; width:100%;"
                                                                                 src="{{ asset('backend/images/Gallery/' . $galleryData->galleryImage) }}"
                                                                                 alt="gallery">
                                                                        @else
                                                                            <img class="galleryShowImage"
                                                                                 src="{{ asset('backend/assets/dist/img/default-150x150.png') }}"
                                                                                 alt="image">
                                                                        @endif

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Image Field input-->
                                                            <div class="input-group my-1">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">Upload</span>
                                                                </div>
                                                                <div class="custom-file">
                                                                    <input type="file" name="galleryImage[]"
                                                                           class="custom-file-input"
                                                                           id="inputGroupFile01"
                                                                           multiple>
                                                                    <label class="custom-file-label"
                                                                           for="inputGroupFile01">Choose
                                                                        file</label>
                                                                </div>
                                                            </div>
                                                        </div> / Gallery Image Show End
{{--                                                         Gallery Input Show --}}
                                                        <div class="col-6">
{{--                                                             Category Name  --}}
                                                            <div class="form-group">
                                                                <label for="galleryCategory">Category Name</label>
                                                                <select name="sub_category" class="form-control">
                                                                    <option value="{{ $galleryData->category }}">
                                                                        @if ($galleryData->category == 1)
                                                                            Web Design
                                                                        @elseif ($galleryData->category == 2)
                                                                            Web Development
                                                                        @elseif ($galleryData->category == 3)
                                                                            Graphics Design
                                                                        @endif
                                                                    </option>
                                                                    <option value="1">Web Design</option>
                                                                    <option value="2">Web Development
                                                                    </option>
                                                                    <option value="3">Graphices Design
                                                                    </option>
                                                                </select>
                                                            </div>
{{--                                                             Gallery Status Aria  --}}
                                                            <div class="form-group">
                                                                <label for="status">Status</label>
                                                                <select name="status" class="form-control">
                                                                    <option value="{{ $galleryData->status }}">
                                                                        @if ($galleryData->status == 1)
                                                                            Active
                                                                        @else
                                                                            Inactive
                                                                        @endif
                                                                    </option>
                                                                    <option value="1">Active</option>
                                                                    <option value="0">Inactive</option>
                                                                </select>
                                                            </div>

{{--                                                             Gallery Save Button  --}}
                                                            <div class="saveBtn d-flex justify-content-end">
                                                                <button class="btn btn-info">Update</button>
                                                            </div>
                                                     </div> {{--    Gallery Input Show End --}}
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-------==========================                                                                                                                                                                               ============================----------->
                            @endforeach
                            </tbody>
                        </table>
                        {{-- Gallery Pagination Add  --}}
                        <div class="galleryPaginate mt-3">
                            <span
                                class="page-numbers current">{{ $galleryAllData->links('pagination::bootstrap-5') }}</span>
                        </div>
                        {{-- Gallery Pagination End  --}}
                    </div>
                    {{-- ---------------------------
                        Gallery Add Form
                        ------------------------------------ --}}
                    <div class="modal fade" id="galleryAdd">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Gallery</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ Route('gallery.store') }}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="modal-body">
                                        <div class="row">
                                            {{-- Gallery Image Show --}}
                                            <div class="col-6">

                                                <label for="devImage">Developer Image</label>
                                                <!-- Image Field input-->
                                                <div class="input-group my-1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Dev Image 1</span>
                                                    </div>
                                                    <div class="custom-file">

                                                        <input type="file" name="devImage1"
                                                               class="custom-file-input" id="inputGroupFile01" multiple>
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                            file</label>
                                                    </div>
                                                </div>

                                                <div class="input-group my-1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Dev Image 2</span>
                                                    </div>
                                                    <div class="custom-file">

                                                        <input type="file" name="devImage2"
                                                               class="custom-file-input" id="inputGroupFile01" multiple>
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                            file</label>
                                                    </div>
                                                </div>

                                            </div>{{-- / Gallery Image Show End --}}
                                            {{-- Gallery Input Show --}}
                                            <div class="col-6">

                                                <label for="eventsImage">Events Image</label>
                                                <div class="input-group my-1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Events Image 1</span>
                                                    </div>
                                                    <div class="custom-file">

                                                        <input type="file" name="eventsImage1"
                                                               class="custom-file-input" id="inputGroupFile01" multiple>
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                            file</label>
                                                    </div>
                                                </div>

                                                <div class="input-group my-1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Events Image 2</span>
                                                    </div>
                                                    <div class="custom-file">

                                                        <input type="file" name="eventsImage2"
                                                               class="custom-file-input" id="inputGroupFile01" multiple>
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                            file</label>
                                                    </div>
                                                </div>

                                                <div class="input-group my-1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Events Image 3</span>
                                                    </div>
                                                    <div class="custom-file">

                                                        <input type="file" name="eventsImage3"
                                                               class="custom-file-input" id="inputGroupFile01" multiple>
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                            file</label>
                                                    </div>
                                                </div>

                                                <div class="input-group my-1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Events Image 4</span>
                                                    </div>
                                                    <div class="custom-file">

                                                        <input type="file" name="eventsImage4"
                                                               class="custom-file-input" id="inputGroupFile01" multiple>
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                            file</label>
                                                    </div>

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
