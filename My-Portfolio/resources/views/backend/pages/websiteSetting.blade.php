@extends('backend/layouts/master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <h3>Website Setting</h3>
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                {{-- Main Body Container Section Satrt Dashboard  --}}
                {{-- Profile Images  --}}
                <div class="card">
                    <div class="card-body">
                        <form action="{{ Route('websiteSetting.settingUpdate') }}" method="POST"
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
                                                    placeholder="Website Title" value="{{ $websiteDataShow->websiteTitle }}">
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
                                                    <img src="{{ asset('backend/images/Logo/'.$websiteDataShow->siteLogo) }}" alt="logo">
                                                </div>
                                            </div>
                                        </div> <!-- row end -->
                                    </div>
                                </div>
                            </div>
                            <!--webSiteSetting end--->

                            {{-- socialLink  --}}
                            <div class="socialLink">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Social Link</h5>
                                    </div>
                                    <div class="card-body">
                                        {{-- Facebook Link  --}}
                                        <div class="row form-group">
                                            <div class="col-md-2">
                                                <label for="facebook">Facebook Link</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="facebook"
                                                    placeholder="Facebook Link" value="{{ $websiteDataShow->facebook }}">
                                            </div>
                                        </div> <!-- row end -->
                                        {{-- Twitter Link  --}}
                                        <div class="row form-group">
                                            <div class="col-md-2">
                                                <label for="twitter">Twitter Link</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="twitter"
                                                    placeholder="Twitter Link" value="{{ $websiteDataShow->twitter }}">
                                            </div>
                                        </div> <!-- row end -->
                                        {{-- instagram Link  --}}
                                        <div class="row form-group">
                                            <div class="col-md-2">
                                                <label for="instagram">instagram Link</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="instagram"
                                                    placeholder="instagram Link" value="{{ $websiteDataShow->instagram }}">
                                            </div>
                                        </div> <!-- row end -->
                                        {{-- linkedin Link  --}}
                                        <div class="row form-group">
                                            <div class="col-md-2">
                                                <label for="linkedin">Linkedin Link</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="linkedin"
                                                    placeholder="Linkedin Link" value="{{ $websiteDataShow->linkedin }}">
                                            </div>
                                        </div> <!-- row end -->
                                        {{-- GitHub Link  --}}
                                        <div class="row form-group">
                                            <div class="col-md-2">
                                                <label for="github">GitHub Link</label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="github"
                                                    placeholder="GitHub Link" value="{{ $websiteDataShow->github }}">
                                            </div>
                                        </div> <!-- row end -->
                                    </div><!-- Card Body end -->
                                </div><!-- Card end -->
                            </div><!-- socialLink end -->
                            <!--profileImage end--->
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
