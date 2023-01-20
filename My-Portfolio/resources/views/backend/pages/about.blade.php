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
                                    <form id="AboutData" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="form-group">
                                                {{-- About Image --}}
                                                <div class="row p-2">
                                                    <div class="col-2">
                                                        <label for="aboutImage">About Image</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="file" class="" name="aboutImage">
                                                    </div>
                                                </div>
                                                {{-- About Title --}}
                                                <div class="row p-2">
                                                    <div class="col-2">
                                                        <label for="aboutTitle">About Title</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="aboutTitle"
                                                            placeholder="About Title">
                                                    </div>
                                                </div>
                                                {{-- About Description --}}
                                                <div class="row p-2">
                                                    <div class="col-2">
                                                        <label for="aboutDescription">About Description</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <textarea class="form-control" name="aboutDescription" cols="10" rows="3" placeholder="Description"></textarea>
                                                    </div>
                                                </div>
                                                {{-- name  --}}
                                                <div class="row p-2">
                                                    <div class="col-2">
                                                        <label for="Name">Name</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="name"
                                                            placeholder="Name">
                                                    </div>
                                                </div>
                                                {{-- Degree --}}
                                                <div class="row p-2">
                                                    <div class="col-2">
                                                        <label for="degree">Degree</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="degree"
                                                            placeholder="Degree">
                                                    </div>
                                                </div>
                                                {{-- Phone --}}
                                                <div class="row p-2">
                                                    <div class="col-2">
                                                        <label for="phone">Phone</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="phone"
                                                            placeholder="Phone">
                                                    </div>
                                                </div>
                                                {{-- Address --}}
                                                <div class="row p-2">
                                                    <div class="col-2">
                                                        <label for="address">Address</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <textarea class="form-control" name="address" cols="10" rows="3" placeholder="Address"></textarea>
                                                    </div>
                                                </div>
                                                {{-- Date Of Birth --}}
                                                <div class="row p-2">
                                                    <div class="col-2">
                                                        <label for="birth">Date Of Birth</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="date" class="form-control" id="birth">
                                                    </div>
                                                </div>
                                                {{-- Date Of Birth Calculate Input --}}
                                                <div>
                                                    <input type="text" class="form-control" hidden id="dateOfBirth"
                                                        name="birth">
                                                </div>
                                                {{-- Experience  --}}
                                                <div class="row p-2">
                                                    <div class="col-2">
                                                        <label for="experience">Experience</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="experience"
                                                            placeholder="Experience">
                                                    </div>
                                                </div>
                                                {{-- Freelance --}}
                                                <div class="row p-2">
                                                    <div class="col-2">
                                                        <label for="freelance">Freelance</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <select name="freelance" class="form-control">
                                                            <option value="1">Avaiable</option>
                                                            <option value="0">Not Avaiable</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                {{-- Status --}}
                                                <div class="row p-2">
                                                    <div class="col-2">
                                                        <label for="status">Status</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <select name="status" class="form-control">
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="">
                                            <button type="submit" class="btn btn-info form-control">Save</button>
                                        </div>
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
