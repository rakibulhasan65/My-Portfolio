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
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ Route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Banner v1</li>
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
                                        <h3 class="card-title">Portfolio Banners</h3>
                                    </div>
                                    {{-- Banner Data Save Start Form --}}
                                    <form action="{{ Route('banners.update', $bannerUpdate->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="form-group">
                                                {{-- Banner Image  --}}
                                                <div class="row p-2">
                                                    <div class="col-2">
                                                        <label for="image">Banner Image</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="file" name="image">
                                                        <div class="bannerImage py-2">
                                                            <img src="{{ asset('backend/images/Banners/' . $bannerUpdate->image) }}"
                                                                alt="Banner" style="height: 100px;width:120px;">
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Banner Developer Name  --}}
                                                <div class="row p-2">
                                                    <div class="col-2">
                                                        <label for="name">Developer Name</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ $bannerUpdate->name }}" placeholder="Developer Name">
                                                    </div>
                                                </div>
                                                {{-- Skills Select  --}}
                                                <div class="row p-2">
                                                    <div class="col-2">
                                                        <label for="skills">Skills</label>
                                                    </div>
                                                    <div class="col-10">

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
                                                {{-- Resume file   --}}
                                                <div class="row p-2">
                                                    <div class="col-2">
                                                        <label for="resume">Resume PDF</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="file" class="" name="resume" id="">
                                                    </div>
                                                </div>
                                                {{-- Professional Video  --}}
                                                <div class="row p-2">
                                                    <div class="col-2">
                                                        <label for="resumeVideo">Professional Video</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="resumeVideo"
                                                            placeholder="Video Link"
                                                            value="{{ $bannerUpdate->resumeVideo }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="">
                                            <button type="submit" class="btn btn-info form-control">Update</button>
                                        </div>
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
