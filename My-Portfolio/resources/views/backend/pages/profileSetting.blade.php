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
                                        <form action="{{ Route('profile.profileUpdate') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="uploadImage">
                                                <img class=""
                                                    src="{{ asset('backend/images/Profile/' . $userShow->userImage) }}"
                                                    alt="profile">
                                                <input class="" type="file" name="userImage" id="">
                                                <p>Choice</p>
                                            </div>
                                            <!--uploadImage end--->
                                            <h4 class="">{{ $userShow->name }}</h4>
                                            <a class="text-sm" href="#">{{ $userShow->email }}</a>
                                    </div>
                                    <!--profileImage end--->
                                </div>
                            </div>
                        </div>

                        {{-- Profile Details  --}}
                        <div class="col-md-8">
                            <div class="profileInputField">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>User Profile</h5>
                                    </div><!-- Card header end -->
                                    <div class="card-body">
                                        {{-- Name   --}}
                                        <div class="row form-group">
                                            <div class="col-md-3">
                                                <label for="name">Name</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="name" placeholder="Name"
                                                    value="{{ $userShow->name }}">
                                            </div>
                                        </div> <!-- row end -->
                                        {{-- Email   --}}
                                        <div class="row form-group">
                                            <div class="col-md-3">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Email" value="{{ $userShow->email }}">
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
                                                <label for="status">Permission</label>
                                            </div>
                                            <div class="col-md-9">
                                                <select name="status" class="form-control">
                                                    <option value="{{ $userShow->status }}">
                                                        @if ($userShow->status == 1)
                                                            Active
                                                        @else
                                                            Deactive
                                                        @endif
                                                    </option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Deactived</option>
                                                </select>
                                            </div>
                                        </div> <!-- row end -->
                                    </div> <!-- Card Body end -->
                                </div>
                            </div><!-- profileInputField end -->
                            <div class="saveChange">
                                <button type="submit" class="btn btn-info">Save Change</button>
                            </div>
                            </form>
                            {{-- Web Site Setting  --}}
                            <div class="webSiteSetting">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Website</h5>
                                    </div>
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
                                        {{-- instagram Link  --}}
                                        <div class="row form-group">
                                            <div class="col-md-3">
                                                <label for="instagram">instagram Link</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="instagram"
                                                    placeholder="instagram Link">
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
                                    </div><!-- Card Body end -->
                                </div><!-- Card end -->
                            </div><!-- socialLink end -->

                        </div>
                    </div>
                </div>
                <!--profilMainBody end-->

                {{-- Main Body Container Section End Dashboard  --}}

            </div>
        </section>


    </div>
@endsection
