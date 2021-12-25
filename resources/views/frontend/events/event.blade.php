@extends('layout.frontend')
@section('title', 'Events')
@section('desc', 'Do not miss our regular events')
@section('content')

<section class="bg-banner">
    <img src="{{ asset('storage/banner/' . 'hill.jpg') }}" alt="" height="250px" width="100%">
    {{-- @if
    (file_exists('uploads/events/banner/' . $data->image) && !empty($data->image))
    <img src="/uploads/events/banner/{{ $data->image }}" alt="Image Not found" srcset="" width="100%" height="250px">
    @endif --}}
</section>
<section>
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color: #f2f7f8;">
                    <li class="breadcrumb-item"><a href="#"> <i class="fas fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Events</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="album bg-light">
        <div class="container">
            {{-- <h3>Past Events</h3> <br> --}}
            <div class="row" style="padding-top: 20px;">

                @if (isset($data) && !$data->isEmpty())
                @foreach ($data as $key => $event)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        {{-- <div class="ribbon-wrapper">
                            <div class="ribbon" style="color: darkslategrey;">Past</div>
                        </div> --}}
                        @if (file_exists('uploads/events/image/' . $event->image) && !empty($event->image))
                        <img src="/uploads/events/image/{{ $event->image }}" alt="Image Not found" srcset=""
                            width="100%" height="100%">
                        @else
                        <img src="{{ asset('img/' . 'no-image.png') }}" alt="Image Not found" srcset="" width="100%"
                            height="100%">
                        @endif
                        <div class="card-body">
                            <a href="{{ route('event-details', $event->slug) }}">
                                <h4 class="card-text">{{ $event->title }} </h4>
                            </a>
                            <span style="text-align: justify;">{!! Str::limit($event->description, 250) !!}</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <div style="float: left;">
                                        <small style="color: tomato;">
                                            <i class="far fa-calendar-alt"></i>
                                            {{ $event->date }} &nbsp;
                                            <i class="fas fa-map-marker-alt"></i>
                                            {{ $event->location }}
                                        </small>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <span>No Record(s) Found</span>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection