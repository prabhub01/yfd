@extends('layout.frontend')
@section('title', 'Contact Us')
@section('desc', 'Do not miss our contact details')
@section('content')
<section class="bg-banner">
    <img src="{{ url('/storage/banner/hill.jpg') }}" alt="Image Not Found" height="250px" width="100%">
</section>
<section>
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color: #f2f7f8;">
                    <li class="breadcrumb-item"><a href="#"> <i class="fas fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="_pl_rt">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="_lo_we_ds" style="background-color: #2393c0;">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="_ol_we_as">
                                    <ol>
                                        <li><i class="fas fa-location-arrow"></i>
                                            <h3 style="color: #4c4c4d;">Location</h3>
                                            <p style="color: #fff;">
                                                {{$data->location}}
                                            </p>
                                        </li>
                                    </ol>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="_ol_we_as">
                                    <ol>
                                        <li><i class="fas fa-mobile-alt"></i>
                                            <h3 style="color: #4c4c4d;">Contact</h3>
                                            <p style="color: #fff;">
                                                {{$data->contact}}
                                            </p>
                                        </li>
                                    </ol>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="_ol_we_as">
                                    <ol>
                                        <li><i class="fas fa-envelope"></i>
                                            <h3 style="color: #4c4c4d;">Email</h3>
                                            <p style="color: #fff;">
                                                {{$data->email}}
                                            </p>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================== Map started====================== -->
    <section class="mab-01">
        <iframe src="{{$data->google_map}}" width="100%" height="500" style="border:0;" allowfullscreen=""
            loading="lazy">
        </iframe>
    </section>

    <!-- ====================== Form started====================== -->

    <section class="my-pla" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2 style="color:rgb(17, 16, 16);">Get In Touch With us</h2>
                        {{-- <p style="color:rgb(19, 18, 18);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do
                            eiusmod tempor incididunt
                        </p> --}}
                    </div>
                </div>
            </div>

            <section
                style="width: 80%; margin:0px auto; padding: 50px; background-color: #fff; border-radius: 20px; margin-bottom: 20px; border: solid;">

                @if (Session::has('flash_success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> {!! Session::get('flash_success') !!}
                </div>
                @endif

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif


                @include('sweetalert::alert')

                <form action="{{ route('contact-us.store') }}" target="" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-5 mb-3">
                            <label for="validationDefault01">Full name *</label>
                            <input type="text" name="full_name" class="form-control" id="validationDefault01"
                                placeholder="" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault02">Email *</label>
                            <input type="email" name="email" class="form-control" id="validationDefault02"
                                placeholder="" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationDefault002">Contact Number*</label>
                            <input type="number" name="contact" class="form-control" id="validationDefault002"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-12">
                            <label for="validationDefault04">Message *</label>
                            <textarea name="message" id="validationDefault04" class="form-control" cols="30"
                                rows="5"></textarea>
                        </div>
                    </div> <br>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </section>
        </div>
    </section>
    @endsection