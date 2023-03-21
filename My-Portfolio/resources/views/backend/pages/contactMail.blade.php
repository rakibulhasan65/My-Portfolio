@extends('backend/layouts/master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                {{-- Main Body Container Section Satrt Dashboard  --}}
                <div class="row">
                    <div class="contactMailBody mt-3 mr-5">
                        <div class="senderName mx-5">
                            <h4>{{ $contactMailData->name }}</h4>
                            <p><span class="text-bold">To:</span> {{ Auth::User()->email }}</p>
                            <p><span class="text-bold">Form:</span> {{ $contactMailData->email }}</p>
                            <p><span class="text-bold">Subject:</span> {{ $contactMailData->subject }}</p>
                            <br>
                            <p class="font-italic"> {{ $contactMailData->message }}</p>
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
