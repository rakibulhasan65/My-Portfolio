@extends('backend/layouts/master')
@push('css')
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
                            <li class="breadcrumb-item active">About Us</li>
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
                                        <h3 class="card-title">About Us</h3>
                                    </div>
                                    <form action="{{ Route('about.update', $aboutDataShow->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="row">
                                                    <!--=====================
                                                                                            About Image Section
                                                                                            ===========================-->
                                                    <div class="col-md-6 col-6">
                                                        {{-- Image Show Of About Section  --}}
                                                        <div class="col-12">
                                                            <div class="aboutImage">
                                                                <img class="w-100"
                                                                    src="{{ asset('backend/images/About/' . $aboutDataShow->aboutImage) }}"
                                                                    alt="Rakib">
                                                            </div>
                                                        </div>
                                                        {{-- Image Upload File Field input  --}}
                                                        <div class="col-12">
                                                            <div class="input-group my-1">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">Upload</span>
                                                                </div>
                                                                <div class="custom-file">
                                                                    <input type="file" name="aboutImage"
                                                                        class="custom-file-input" id="inputGroupFile01">
                                                                    <label class="custom-file-label"
                                                                        for="inputGroupFile01">Choose
                                                                        file</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- About Title --}}
                                                        <div class="row p-2">
                                                            <div class="col-12 col-md-12">
                                                                <label for="aboutTitle">About Title</label>
                                                            </div>
                                                            <div class="col-12 col-md-12">
                                                                <input value="{{ $aboutDataShow->aboutTitle }}"
                                                                    type="text" class="form-control" name="aboutTitle"
                                                                    placeholder="About Title">
                                                            </div>
                                                        </div>
                                                        {{-- About Description --}}
                                                        <div class="row p-2">
                                                            <div class="col-12 col-md-12">
                                                                <label for="aboutDescription">About Description</label>
                                                            </div>
                                                            <div class="col-12 col-md-12">
                                                                <textarea class="form-control" name="aboutDescription" cols="10" rows="3" placeholder="Description">{{ $aboutDataShow->aboutDescription }}
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--=====================
                                                                                            About All Input Field Section
                                                                                            ===========================-->
                                                    <div class="col-md-6 col-6">

                                                        {{-- name  --}}
                                                        <div class="row p-2">
                                                            <div class="col-12 col-md-12">
                                                                <label for="Name">Name</label>
                                                            </div>
                                                            <div class="col-12 col-md-12">
                                                                <input value="{{ $aboutDataShow->name }}" type="text"
                                                                    class="form-control" name="name" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        {{-- Degree --}}
                                                        <div class="row p-2">
                                                            <div class="col-12 col-md-12">
                                                                <label for="degree">Degree</label>
                                                            </div>
                                                            <div class="col-12 col-md-12">
                                                                <input value="{{ $aboutDataShow->degree }}" type="text"
                                                                    class="form-control" name="degree"
                                                                    placeholder="Degree">
                                                            </div>
                                                        </div>
                                                        {{-- Phone --}}
                                                        <div class="row p-2">
                                                            <div class="col-12 col-md-12">
                                                                <label for="phone">Phone</label>
                                                            </div>
                                                            <div class="col-12 col-md-12">
                                                                <input value="{{ $aboutDataShow->phone }}" type="text"
                                                                    class="form-control" name="phone" placeholder="Phone">
                                                            </div>
                                                        </div>
                                                        {{-- Email --}}
                                                        <div class="row p-2">
                                                            <div class="col-12 col-md-12">
                                                                <label for="email">Email</label>
                                                            </div>
                                                            <div class="col-12 col-md-12">
                                                                <input value="{{ $aboutDataShow->email }}" type="email"
                                                                    class="form-control" name="email" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        {{-- Address --}}
                                                        <div class="row p-2">
                                                            <div class="col-12 col-md-12">
                                                                <label for="address">Address</label>
                                                            </div>
                                                            <div class="col-12 col-md-12">
                                                                <textarea class="form-control" name="address" cols="10" rows="3" placeholder="Address">{{ $aboutDataShow->address }}</textarea>
                                                            </div>
                                                        </div>
                                                        {{-- Date Of Birth --}}
                                                        <div class="row p-2">
                                                            <div class="col-12 col-md-12">
                                                                <label for="birth">Date Of Birth</label>
                                                            </div>
                                                            <div class="col-12 col-md-12">
                                                                <input value="{{ $aboutDataShow->birth }}" type="date"
                                                                    class="form-control" id="birth">
                                                            </div>
                                                        </div>
                                                        {{-- Date Of Birth Calculate Input --}}
                                                        <div>
                                                            <input type="text" class="form-control" id="dateOfBirth"
                                                                name="birth" hidden>
                                                        </div>
                                                        {{-- Experience  --}}
                                                        <div class="row p-2">
                                                            <div class="col-12 col-md-12">
                                                                <label for="experience">Experience</label>
                                                            </div>
                                                            <div class="col-12 col-md-12">
                                                                <input value="{{ $aboutDataShow->experience }}"
                                                                    type="text" class="form-control" name="experience"
                                                                    placeholder="Experience">
                                                            </div>
                                                        </div>
                                                        {{-- Freelance --}}
                                                        <div class="row p-2">
                                                            <div class="col-12 col-md-12">
                                                                <label for="freelance">Freelance</label>
                                                            </div>
                                                            <div class="col-12 col-md-12">
                                                                <select name="freelance" class="form-control">
                                                                    <option value="{{ $aboutDataShow->freelance }}">
                                                                        @if ($aboutDataShow->freelance == 1)
                                                                            Avaiable
                                                                        @else
                                                                            Not Avaiable
                                                                        @endif
                                                                    </option>
                                                                    <option value="1">Avaiable</option>
                                                                    <option value="0">Not Avaiable</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        {{-- Status --}}
                                                        <div class="row p-2">
                                                            <div class="col-12 col-md-12">
                                                                <label for="status">Status</label>
                                                            </div>
                                                            <div class="col-12 col-md-12">
                                                                <select name="status" class="form-control">
                                                                    <option value="{{ $aboutDataShow->status }}">
                                                                        @if ($aboutDataShow->status == 1)
                                                                            Active
                                                                        @else
                                                                            Inactive
                                                                        @endif
                                                                    <option value="1">Active</option>
                                                                    <option value="0">Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-md-12 d-flex justify-content-end">
                                                            <button type="submit" class="btn btn-info">Update</button>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                    </form>
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
@endpush
