@extends('backend/layouts/master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h2 class="m-0">Hire Me</h2>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Hire Me</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                {{-- Main Body Container Section Satrt   --}}
                <form action="" method="post">
                    <div class="orderCetegory card p-3">
                        <h4>Order Cetegory</h4>
                        <table class="table table-bordered" id="dynamicAddRemove">
                            <thead>
                                <tr>
                                    <th>Cetegory</th>
                                    <th>Service Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><select name="" id="" class="form-control">
                                            <option value="1">Basic</option>
                                            <option value="2">Standerd</option>
                                            <option value="3">Premium</option>
                                        </select></td>
                                    <td><input type="text" name="addMoreServicesType[0][category_type]" id=""
                                            class="form-control" placeholder="Enter Service type"></td>
                                    <td><button type="button" id="addMoreBtn" class="btn btn-outline-info">Add
                                            More</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <button type="submit" class="btn btn-outline-success">Save Cetegory</button>
                </form>

                {{-- Main Body Container Section End   --}}

            </div>
        </section>

    </div>
@endsection
