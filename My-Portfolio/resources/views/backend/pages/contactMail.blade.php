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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
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
                <div class="row">
                    <div class="contactMailBody">
                        <div class="senderName mx-5">
                            <h4>{{ $contactMailData->name }}</h4>
                            <p><span class="text-bold">To:</span> {{ Auth::User()->email }}</p>
                            <p><span class="text-bold">Form:</span> {{ $contactMailData->email }}</p>
                            <p><span class="text-bold">Subject:</span> {{ $contactMailData->subject }}</p>
                            <br>
                            <p> {{ $contactMailData->message }}</p>
                            <br>
                            <h5 class="text-bold">Regards</h5>
                            <h5>{{ $contactMailData->name }}</h5>
                            <p><span class="text-bold">Date Time:</span> {{ $contactMailData->created_at }}</p>
                        </div>
                    </div>
                </div>
                {{-- Main Body Container Section End Dashboard  --}}

            </div>
        </section>

    </div>
@endsection
