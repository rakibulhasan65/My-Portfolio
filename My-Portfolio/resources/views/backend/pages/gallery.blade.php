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
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Portfolio Gallerys</h3>
                                    </div>
                                    {{-- Gallery Data Save Start Form --}}
                                    <form id="GallerySave" action="{{ Route('gallery.gallerySave') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        {{-- @method('POST') --}}
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            {{-- Web Development  --}}
                                            <div class="form-group row">
                                                <div class="col-2">
                                                    <label for="webDevelopment">Web Development</label>
                                                </div>
                                                <div class="col-10">
                                                    <input type="file" name="webDevelopment[]" multiple>
                                                    <div class="webDevImage row my-3">
                                                        @foreach ($webDevDataShow as $item)
                                                            <div class="galleryImage col-2">
                                                                <img src="{{ asset('backend/images/Gallery/' . $item->webDevelopment) }}"
                                                                    alt="Development">
                                                                <div class="deleteGallery">
                                                                    <button id="deleteGalleryImage"
                                                                        class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Web Design  --}}
                                            <div class="form-group row">
                                                <div class="col-2">
                                                    <label for="webDesign">Web Design</label>
                                                </div>
                                                <div class="col-10">
                                                    <input type="file" name="webDesign[]" multiple>
                                                    <div class="webDesignImage row my-3">
                                                        @foreach ($webDesignDataShow as $item)
                                                            <div class="galleryImage col-2">
                                                                <img src="{{ asset('backend/images/Gallery/' . $item->webDesign) }}"
                                                                    alt="Development">
                                                                <div class="deleteGallery">
                                                                    <button id="deleteGalleryImage"
                                                                        class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="">
                                            <button type="submit" class="btn btn-info form-control">Upload</button>
                                        </div>
                                    </form>
                                    {{-- Gallery Data Save End Form  --}}

                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
                {{-- Main Body Container Section End Dashboard  --}}
            </div>
        </section>

    </div>
@endsection
