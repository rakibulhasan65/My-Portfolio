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
                <div class="basicCategory card p-3">
                    <form action="" method="post">
                        <h4>Pricing Category Details</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-2"> <!---- start row of Pricing input feild ---->
                                    <div class="col-md-8"><!---col-md-6----->
                                        <div class="row ml-2">
                                            <div class="col-md-2">
                                                <p class="font-weight-bold">Order Type</p>
                                            </div>
                                            <div class="col-md-3">
                                               <select name="orderType" class="form-control" id="">
                                                <option value="1">Basic</option>
                                                <option value="2">Standard</option>
                                                <option value="3">Premium</option>
                                               </select>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="text-right font-weight-bold">Package Price :</p>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" name="price" id="" class="form-control"
                                                    placeholder="/USD">
                                            </div>
                                        </div>
                                    </div><!--//-col-md-6----->
                                    <div class="col-md-4"> <!---col-md-6----->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p class="font-weight-bold text-right">Duration:</p>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="number" name="duration" id="" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <select name="duration_type" id="" class="form-control">
                                                    <option value="1">Day</option>
                                                    <option value="2">Month</option>
                                                    <option value="3">Years</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!--//-col-md-6----->
                                </div> <!---- // row of pricing input feild ---->

                                <div class="row"> <!---- start row of category input feild ---->
                                   <table class="table table-b" id="dynamicAddRemove">
                                    <thead>
                                        <tr>
                                            <th>Order Details Type List</th>
                                            <th class="text-left">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input class="form-control" type="text" name="categoryAddMoreInputField[0][catTitleDetails]" id="catTitle_input" placeholder="Enter Category Type..">
                                            </td>
                                            <td>
                                                <button type="button" id="addMore_btn" class="btn btn-outline-info ">Add More</button>
                                                <a type="button" class="btn btn-outline-primary">Update</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                   </table>
                                </div> <!---- // row of category input feild ---->
                            </div>
                            <button type="submit" class="btn btn-outline-success m-2">Save Cetegory</button>
                    </form>
                </div>

                {{-- Main Body Container Section End   --}}

            </div>
        </section>

    </div>
@endsection
