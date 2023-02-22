@extends('backend/layouts/master')
@push('css')
    <link rel="stylesheet" href="{{ asset('backend/assets/dist/css/profileStyle.css') }}">
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
                            <li class="breadcrumb-item active">Profile</li>
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
                <div class="profilMainBody card p-5">
                    <form action="{{ Route('profile.profileUpdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            {{-- Profile Images  --}}
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Profile Pucture</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="profileImage">
                                            <div class="uploadImage">
                                                @if (Auth::user()->userImage == null)
                                                    <img class=""
                                                        src="{{ asset('backend/assets/dist/img/avatar.png') }}"
                                                        alt="profile">
                                                @else
                                                    <img class=""
                                                        src="{{ asset('backend/images/Profile/' . $userShow->userImage) }}"
                                                        alt="profile">
                                                @endif
                                                <input class="" type="file" name="userImage" id="">
                                                <p>Choice</p>
                                            </div>
                                            <!--uploadImage end--->
                                            <h4 class="">{{ $userShow->name }}</h4>
                                            <a class="text-sm" href="#">{{ $userShow->email }}</a>
                                        </div>
                                        <!--profileImage end--->
                                        <!----- Social Link Start ----->
                                        <div class="d-flex justify-content-center pt-3">
                                            <div class="socialLink bg-gray w-25">
                                                <a href="{{ $userShow->facebook }}"><i class="fas fa-facebook-"></i></a>
                                                <a href="{{ $userShow->twitter }}""><i class="fas fa-twitter"></i></a>
                                                <a href="{{ $userShow->instagram }}""><i class="fas fa-instagram"></i></a>
                                                <a href="{{ $userShow->linkedin }}""><i class="fas fa-linkedin"></i></a>
                                                <a href="{{ $userShow->github }}""><i class="fas fa-github"></i></a>
                                            </div>
                                        </div>
                                        <!----- Social Link End ----->
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Profile Details  --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="profileInputField">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>User Details</h5>
                                        </div><!-- Card header end -->
                                        <div class="card-body">
                                            {{-- Name   --}}
                                            <div class="row form-group">
                                                <div class="col-md-3">
                                                    <label for="name">Name</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Name" value="{{ $userShow->name }}">
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
                                                    <input type="password" class="form-control" name="newPassword"
                                                        placeholder="New Password">
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
                            </div>

                            <div class="col-md-6">
                                <!--- Social Link Start --->
                                <div class="socialLink">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Social Link</h5>
                                        </div>
                                        <div class="card-body">
                                            {{-- Facebook   --}}
                                            <div class="row form-group">
                                                <div class="col-md-3">
                                                    <label for="facebook">Facebook</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="facebook"
                                                        placeholder="Facebook" value="{{ $userShow->facebook }}">
                                                </div>
                                            </div> <!-- row end -->
                                            {{-- twitter   --}}
                                            <div class="row form-group">
                                                <div class="col-md-3">
                                                    <label for="Twitter">Twitter</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="twitter"
                                                        placeholder="Twitter" value="{{ $userShow->twitter }}">
                                                </div>
                                            </div> <!-- row end -->
                                            {{--  instagram   --}}
                                            <div class="row form-group">
                                                <div class="col-md-3">
                                                    <label for="instagram">Instagram</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="instagram"
                                                        value="{{ $userShow->instagram }}" placeholder="instagram">
                                                </div>
                                            </div> <!-- row end -->

                                            {{--   linkedin   --}}
                                            <div class="row form-group">
                                                <div class="col-md-3">
                                                    <label for="linkedin">Linkedin</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="linkedin"
                                                        value="{{ $userShow->linkedin }}" placeholder="Linkedin">
                                                </div>
                                            </div> <!-- row end -->
                                            {{--  Github   --}}
                                            <div class="row form-group">
                                                <div class="col-md-3">
                                                    <label for="github">Github</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="github" class="form-control"
                                                        value="{{ $userShow->github }}" placeholder="Github">
                                                </div>
                                            </div> <!-- row end -->

                                        </div>
                                    </div>
                                    <div>
                                    </div>
                                    <div class="SubmitButton d-flex justify-content-end">
                                        <button class="btn btn-info">Save Change</button>
                                    </div>
                                </div>
                                <!--- Social Link End --->
                            </div>
                        </div>
                    </form>
                    {{-- Profile Details Section End --}}
                </div>
                <!--profilMainBody end-->
                {{-- Main Body Container Section End Dashboard  --}}
            </div>
        </section>


    </div>
@endsection
