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
                            <li class="breadcrumb-item active">Dashboard</li>
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

                <div class="userTable row">
                    <div class="col-12">
                        <table class="table table-hover">
                            <thead class="bg-light">
                                <tr>
                                    <th>#Sl</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contactAllData as $contactData)
                                    <tr>
                                        <td>{{ $contactAllData->firstItem() + $loop->index }}</td>
                                        <td>{{ $contactData->name }}</td>
                                        <td>{{ $contactData->email }}</td>
                                        <td>{{ $contactData->subject }}</td>
                                        <td>{{ $contactData->message }}</td>
                                        <td>{{ $contactData->created_at->diffForHumans() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <span class="page-numbers current">{{ $contactAllData->links('pagination::bootstrap-5') }}</span>

                    </div>


                </div>


                {{-- Main Body Container Section End Dashboard  --}}

            </div>
        </section>
    </div>
@endsection
