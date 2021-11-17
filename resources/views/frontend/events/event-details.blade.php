@extends('layout.frontend')
@section('content')
    <section class="bg-banner">
        <img src="{{ asset('storage/banner/' . 'hill1.jpg') }}" alt="" height="250px" width="100%">
    </section>
    <section>
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background-color: #f2f7f8;">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}"> <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('event') }}">Events</a> </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $data->title }}</li>

                    </ol>
                </nav>
            </div>
        </div>
        <div class="album" style="background-color: #fff;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="mb-4 box-shadow">
                            <div class="card-body" style="padding: 10px 10px 10px 0px;">
                                <h3 class="card-text" style="color: rgb(74, 64, 223);">{{ $data->title }} </h3>
                                <div class="d-flex justify-content-between align-items-center">
                                </div>
                            </div>
                        </div>

                        <div>
                            <span style="text-align: justify;">
                                <p style="margin-bottom: 20px;">{!! $data->description !!}</p>
                            </span>
                        </div>

                        <div>
                            <p align="center" style="margin: 20px;">
                                @if (file_exists('uploads/events/image/' . $data->image) && !empty($data->image))
                                    <img src="/uploads/events/image/{{ $data->image }}" alt="Image Not found" srcset=""
                                        width="80%" height="60%">
                                @endif
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
