@extends('backend/layouts/master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h2 class="m-0">Dashboard</h2>
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
                            <a href="#" id="allSelect_itemDelete_btn" class="btn btn-danger btn-sm my-2">All Select Items Delete</a>
                            <thead class="bg-light">
                                <tr>
                                    <th><input type="checkbox" id="allCheck_delete_id"></th>
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
                                    <tr id="contact_ids{{ $contactData->id }}">
                                        <td><input type="checkbox" name="contact_deleteIds[]" class="single_id_select"
                                                value="{{ $contactData->id }}"></td>
                                        <td>{{ $contactAllData->firstItem() + $loop->index }}</td>
                                        <td>
                                            <a href="{{ Route('contactMail', $contactData->id) }}"
                                                class="nav-link text-dark">{{ $contactData->name }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ Route('contactMail', $contactData->id) }}"
                                                class="nav-link text-dark">{{ $contactData->email }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ Route('contactMail', $contactData->id) }}"
                                                class="nav-link text-dark">{{ str_limit($contactData->subject, $limit = 20) }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ Route('contactMail', $contactData->id) }}"
                                                class="nav-link text-dark">{{ str_limit($contactData->message, $limit = 40) }}</a>
                                        </td>
                                        <td>{{ $contactData->created_at->diffForHumans() }}</td>
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
