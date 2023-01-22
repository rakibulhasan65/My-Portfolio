@extends('backend/layouts/master')
@push('css')
    <link rel="stylesheet" href="{{ asset('backend/assets/dist/css/profileStyle.css') }}">
@endpush
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <h3>Profile Setting</h3>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                {{-- Main Body Container Section Satrt Dashboard  --}}
                <div class="profilMainBody card p-5">
                    <div class="row">
                        {{-- Profile Images  --}}
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Profile Pucture</h5>
                                </div>
                                <div class="card-body">
                                    <div class="profileImage">
                                        <div class="uploadImage">
                                            <img class=""
                                                src="{{ asset('backend/images/About/1673925569-1521335986.jpg') }}"
                                                alt="profile">
                                            <input class="" type="file" name="" id="">
                                            <p>Choice</p>
                                        </div>
                                        <!--uploadImage end--->
                                        <h4 class=""><i class="fas fa-edit p-2"></i>Md Rakibul Hasan</h4>
                                        <a class="text-sm" href="#">rakibulhasan5665@gmail.com</a>
                                    </div>
                                    <!--profileImage end--->
                                </div>
                            </div>
                        </div>

                        {{-- Profile Details  --}}
                        <div class="col-md-8">
                            <form action="{{ Route('profile.profileStore') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="profileInputField">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>User Profile</h5>
                                    </div><!-- Card header end -->
                                    <div class="card-body">
                                        {{-- Website Title  --}}
                                        <div class="row form-group">
                                            <div class="col-md-3">
                                                <label for="websiteTitle">Website Title</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="websiteTitle"
                                                    placeholder="Website Title">
                                            </div>
                                        </div> <!-- row end -->
                                        {{-- Site Logo  --}}
                                        <div class="row form-group">
                                            <div class="col-md-3">
                                                <label for="siteLogo">Site Logo</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="file" class="" name="siteLogo">
                                            </div>
                                        </div> <!-- row end -->
                                        
                                        {{-- Gmail   --}}
                                        <div class="row form-group">
                                            <div class="col-md-3">
                                                <label for="gmail">Gmail</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="gmail" class="form-control" name="gmail"
                                                    placeholder="Gmail">
                                            </div>
                                        </div> <!-- row end -->
                                        {{--  Password   --}}
                                        <div class="row form-group">
                                            <div class="col-md-3">
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                        </div> <!-- row end -->

                                        {{--  New Password   --}}
                                        <div class="row form-group">
                                            <div class="col-md-3">
                                                <label for="newPassword">New Password</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" name="newPassword">
                                            </div>
                                        </div> <!-- row end -->
                                        {{--  Permission   --}}
                                        <div class="row form-group">
                                            <div class="col-md-3">
                                                <label for="permission">Permission</label>
                                            </div>
                                            <div class="col-md-9">
                                                <select name="permission" class="form-control">
                                                    <option value="1">Active</option>
                                                    <option value="0">Deactived</option>
                                                </select>
                                            </div>
                                        </div> <!-- row end -->
                                    </div> <!-- Card Body end -->
                                </div>
                            </div><!-- profileInputField end -->
                            <div class="socialLink">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Social Link</h5>
                                    </div>
                                    <div class="card-body">
                                        {{-- Facebook Link  --}}
                                       <div class="row form-group">
                                            <div class="col-md-3">
                                                <label for="facebook">Facebook Link</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="facebook"
                                                    placeholder="Facebook Link">
                                            </div>
                                        </div> <!-- row end -->
                                        {{-- Twitter Link  --}}
                                       <div class="row form-group">
                                            <div class="col-md-3">
                                                <label for="twitter">Twitter Link</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="twitter"
                                                    placeholder="Twitter Link">
                                            </div>
                                        </div> <!-- row end -->
                                        {{-- Instragram Link  --}}
                                       <div class="row form-group">
                                            <div class="col-md-3">
                                                <label for="instragram">Instragram Link</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="instragram"
                                                    placeholder="Instragram Link">
                                            </div>
                                        </div> <!-- row end -->
                                        {{-- linkedin Link  --}}
                                       <div class="row form-group">
                                            <div class="col-md-3">
                                                <label for="linkedin">Linkedin Link</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="linkedin"
                                                    placeholder="Linkedin Link">
                                            </div>
                                        </div> <!-- row end -->
                                        {{-- GitHub Link  --}}
                                       <div class="row form-group">
                                            <div class="col-md-3">
                                                <label for="github">GitHub Link</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="github"
                                                    placeholder="GitHub Link">
                                            </div>
                                        </div> <!-- row end -->
                                        <div class="saveChange">
                                            <button type="submit" class="btn btn-info">Save Change</button>
                                        </div>
                                    </div><!-- Card Body end -->
                                </div><!-- Card end -->
                            </div><!-- socialLink end -->
                            </form>
                        </div>
                    </div>
                </div>
                <!--profilMainBody end-->

                {{-- Main Body Container Section End Dashboard  --}}

            </div>
        </section>


    </div>
@endsection
