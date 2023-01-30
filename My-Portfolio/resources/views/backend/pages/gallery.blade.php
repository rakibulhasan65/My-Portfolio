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
                <!-----------============================
                                                             Gallery Image
                                                ===================================------------->
                <div class="row">
                    <!-----------============================
                                                            Developmet Gallery Image
                                                ===================================------------->
                    <div class="col-6">
                        <div class="devGallery p-2 shadow-sm">
                            <div class="imageInputField">
                                <label for="webDevelopment">Web Development Gallary Image</label>
                                <div class="input-group my-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="webDevelopment" class="custom-file-input"
                                            id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>
                            <!-------Input Feild End--------->
                            <div class="row">
                                {{-- @foreach ($webDevDataShow as $webDevData) --}}
                                    <div class="col-4 col-md-4">
                                        <div class="gallery">
                                            <img src=""
                                                alt="Image 2">
                                            <div class="overlay">
                                                    <button id="devImgDelete" class="btn btn-danger" data-id="" data-token="{{ csrf_token() }}"><i class="fa fa-trash"></i></button>
                                            </div>
                                            <!-- Add more images and buttons here -->
                                        </div>
                                    </div>
                                {{-- @endforeach --}}
                            </div>
                        </div>
                    </div>
                    <!-----------============================
                                                                 Design Gallery Image
                                                ===================================------------->
                    <div class="col-6">
                        <div class="designGallery p-2 shadow-sm">
                            <div class="imageInputField">
                                <label for="webDesign">Web Design Gallary Image</label>
                                <div class="input-group my-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="webDesign" class="custom-file-input"
                                            id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>
                            <!-------Input Feild End--------->
                            <div class="row">
                                @foreach ($webDesignDataShow as $webDesignData)
                                    <div class="col-4 col-md-4">
                                        <div class="gallery">
                                            <img src="{{ asset('backend/images/Gallery/' . $webDesignData->webDesign) }}"
                                                alt="Image 2">
                                            <div class="overlay">
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </div>
                                            <!-- Add more images and buttons here -->
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>



                {{-- Main Body Container Section End Dashboard  --}}
            </div>
        </section>

    </div>
@endsection
