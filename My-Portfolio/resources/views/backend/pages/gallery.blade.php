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
                                            <div class="row">
                                                <!--===================================
                                                                                                Web Development Section Start
                                                                                                ==================================-->
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group row">
                                                        <div class="col-12 col-md-12">
                                                            <label for="webDevelopment">Web Development</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="input-group my-1">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">Upload</span>
                                                                </div>
                                                                <div class="custom-file">
                                                                    <input type="file" name="webDevelopment[]" multiple
                                                                        class="custom-file-input" id="inputGroupFile01">
                                                                    <label class="custom-file-label"
                                                                        for="inputGroupFile01">Choose
                                                                        file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- Web Development Image Show  --}}
                                                    <div class="webDevImage d-flex justify-content-center row my-3">
                                                        @foreach ($webDevDataShow as $item)
                                                            <div class="galleryImage col-4">
                                                                <img src="{{ asset('backend/images/Gallery/' . $item->webDevelopment) }}"
                                                                    alt="Development">
                                                                <div class="deleteGallery">
                                                                    <form
                                                                        action="{{ Route('gallery.devImgDelete', $item->id) }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <button type="submit" class="btn btn-danger"><i
                                                                                class="fas fa-trash"></i></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                                <!--===================================
                                                                                                Web Design Section Start
                                                                                                ==================================-->
                                                <div class="col-6 col-md-6">
                                                    {{-- Web Design  --}}
                                                    <div class="form-group row">
                                                        <div class="col-12 col-md-12">
                                                            <label for="webDevelopment">Web Template Design</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="input-group my-1">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">Upload</span>
                                                                </div>
                                                                <div class="custom-file">
                                                                    <input type="file" name="webDesign[]" multiple
                                                                        class="custom-file-input" id="inputGroupFile01">
                                                                    <label class="custom-file-label"
                                                                        for="inputGroupFile01">Choose
                                                                        file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- Web Design Image Show  --}}
                                                    <div class="webDesignImage d-flex justify-content-center row my-3">
                                                        @foreach ($webDesignDataShow as $item)
                                                            <div class="galleryImage col-4">
                                                                <img src="{{ asset('backend/images/Gallery/' . $item->webDesign) }}"
                                                                    alt="Development">
                                                                <div class="deleteGallery">
                                                                    <form
                                                                        action="{{ Route('gallery.designImgDelete', $item->id) }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <button type="submit" class="btn btn-danger"><i
                                                                                class="fas fa-trash"></i></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-info">Upload</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /.card-body -->
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
