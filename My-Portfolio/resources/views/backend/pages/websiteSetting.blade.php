@extends('backend/layouts/master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h2 class="m-0">Setting</h2>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ Route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Setting</li>
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
                {{-- Profile Images  --}}
                <div class="card">
                    <div class="card-body">
                        <form action="{{ Route('websiteSetting.settingUpdate', $websiteDataShow->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            {{-- Web Site Setting  --}}
                            <div class="webSiteSetting">
                                <div class="row">
                                    {{-- Col-md-6 Left Side Start  --}}
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            {{-- Website Title  --}}
                                            <div class="row form-group">
                                                <div class="col-md-2">
                                                    <label for="websiteTitle">Site Title</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="websiteTitle"
                                                        placeholder="Website Title"
                                                        value="{{ $websiteDataShow->websiteTitle }}">
                                                </div>
                                            </div> <!-- row end -->
                                            {{-- Site Logo  --}}
                                            <div class="row form-group">
                                                <div class="col-md-2">
                                                    <label for="siteLogo">Site Logo</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="input-group my-1">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" name="siteLogo" class="custom-file-input"
                                                                id="inputGroupFile01">
                                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                    <div class="websiteLogo my-2 border p-2">
                                                        <img src="{{ asset('backend/images/Website/' . $websiteDataShow->siteLogo) }}"
                                                            alt="logo">
                                                    </div>
                                                    <span class="font-italic">Requirment:Logo Image Size 168x48px
                                                        png,jpg,jpeg </span>
                                                </div>
                                            </div> <!-- row end -->
                                        </div>
                                    </div>
                                    {{-- Col-md-6 Left Side End  --}}
                                    {{-- Col-md-6 Right Side Start  --}}
                                    <div class="col-md-6">
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label for="">Favicon</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="input-group my-1">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" name="favicon" class="custom-file-input"
                                                                id="inputGroupFile01">
                                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                    <div class="faviconImage  my-2 border p-2">
                                                        <img src="{{ asset('backend/images/Website/' . $websiteDataShow->favicon) }}"
                                                            alt="">
                                                    </div>
                                                    <span class="font-italic">Requirment:Favicon Image Size 45x45px
                                                        png,jpg,jpeg </span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- Col-md-6 Right Side End  --}}

                                </div>
                            </div>
                            <!--webSiteSetting end--->

                    </div>
                    <div class="card-footer">
                        <div class="saveChange">
                            <button type="submit" class="btn btn-info">Save Change</button>
                        </div>
                    </div>
                </div>

                </form>
            </div>
            <!--profilMainBody end-->

            {{-- Main Body Container Section End Dashboard  --}}
    </div>
    </section>
    </div>
@endsection
