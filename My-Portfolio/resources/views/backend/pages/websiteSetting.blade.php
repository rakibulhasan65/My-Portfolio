@extends('backend/layouts/master')
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
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Website</h5>
                                    </div>
                                    <div class="card-body">
                                        {{-- Website Title  --}}
                                        <div class="row form-group">
                                            <div class="col-md-2">
                                                <label for="websiteTitle">Website Title</label>
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
                                                <input type="file" class="" name="siteLogo">
                                                <div class="wibsiteLogo my-2 border p-2">
                                                    <img src="{{ asset('backend/images/Logo/' . $websiteDataShow->siteLogo) }}"
                                                        alt="logo">
                                                </div>
                                            </div>
                                        </div> <!-- row end -->
                                    </div>
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
