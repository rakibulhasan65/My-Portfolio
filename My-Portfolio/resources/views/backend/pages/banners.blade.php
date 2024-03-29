@extends('backend/layouts/master')
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
@endpush
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h2 class="m-0">Banners</h2>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ Route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Banner</li>
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

                                    {{-- Banner Data Save Start Form --}}
                                    <form action="{{ Route('banners.update', $bannerUpdate->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="row">
                                                <!--=====================
                                                                                                                                                                                                                            Banner Image Section
                                                                                                                                                                                                                            ===========================-->
                                                <div class="col-6 col-md-6">
                                                    <img src="{{ asset('backend/images/Banners/' . $bannerUpdate->image) }}"
                                                        class="w-100" alt="Banner">
                                                    <!-- Image Field Start-->
                                                    <div class="input-group my-1">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" name="image" class="custom-file-input"
                                                                id="inputGroupFile01">
                                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <small class="font-italic">Requirements: jpg, jpeg or png | max:
                                                            10mb
                                                            Size recommended: 600x600px</small>
                                                    </div>
                                                    <!--// Image Field end-->

                                                    <!--=====================
                                                                                                                                                                                                                            Banner All Input Field Section
                                                                                                                                                                                                                            ===========================-->
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    {{-- Banner Developer Name  --}}
                                                    <div class="row p-2">
                                                        <div class="col-12 col-md-12">
                                                            <label for="name">Developer Name</label>
                                                        </div>
                                                        <div class="col-12 col-md-12">
                                                            <input type="text" class="form-control" name="name"
                                                                value="{{ $bannerUpdate->name }}"
                                                                placeholder="Developer Name">
                                                        </div>
                                                    </div>
                                                    {{-- Skills Select  --}}
                                                    <div class="row p-2">
                                                        <div class="col-12 col-md-12">
                                                            <label for="skills">Skills</label>
                                                        </div>
                                                        <div class="col-12 col-md-12">

                                                            <select class="form-control" id="devSkillsCategorySave"
                                                                name="devSkillsCategory[]" multiple="multiple">
                                                                <option value="Web Application">Web Application</option>
                                                                <option value="API Developmet">API Developmet</option>
                                                                <option value="Web Design">Web Design</option>
                                                            </select>
                                                            @foreach ($skillsDataShow as $skillsData)
                                                                <button type="text"
                                                                    class="my-2 btn btn-light">{{ $skillsData->devSkillsCategory }}</button>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <!-- Resume Field Start-->
                                                    <div class="col-12 col-md-12">
                                                        <div class="col-md-12">
                                                            <div class="resumePdfShow">
                                                                <iframe
                                                                    src="{{ asset('backend/images/Banners/' . $bannerUpdate->resume) }}"
                                                                    style="width: 100%;height: 100%;border: none;"></iframe>
                                                            </div>
                                                        </div>
                                                        <div class="input-group my-1">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Upload</span>
                                                            </div>
                                                            <div class="custom-file">
                                                                <input type="file" name="resume"
                                                                    class="custom-file-input" id="inputGroupFile01">
                                                                <label class="custom-file-label"
                                                                    for="inputGroupFile01">Choose
                                                                    file</label>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <small class="font-italic">Requirements: pdf | max: 10mb</small>
                                                        </div>
                                                    </div>
                                                    <!--// Resume Field end-->


                                                    {{-- Professional Video  --}}
                                                    <div class="row p-2">
                                                        <div class="col-12 col-md-12">
                                                            <label for="resumeVideo">Professional Video</label>
                                                        </div>
                                                        <div class="col-12 col-md-12">
                                                            <input type="text" class="form-control" name="resumeVideo"
                                                                placeholder="Video Link"
                                                                value="{{ $bannerUpdate->resumeVideo }}">
                                                        </div>

                                                        <div class="col-12 col-md-12 d-flex justify-content-end">
                                                            <button type="submit" class="my-2 btn btn-info">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                    </form>
                                    {{-- Banner Data Save End Form  --}}

                                    {{-- Banner Data Save Start Form --}}

                                    {{-- Banner Data Save End Form  --}}
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
@push('js')
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>

    <script>
        new MultiSelectTag('devSkillsCategorySave') // id
    </script>
    <script>
        new MultiSelectTag('devSkillsCategoryUpdate') // id
    </script>
@endpush
