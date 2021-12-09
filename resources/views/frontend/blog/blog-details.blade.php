@extends('layout.frontend')
@section('content')
@if (file_exists('uploads/blogs/banner/' . $data->banner) && !empty($data->banner))
<img src="{{ asset('uploads/blogs/banner/' . $data->banner) }}" alt="Not found" srcset="" width="100%" height="250px">
@else
<img src="{{ url('/storage/banner/hill.jpg') }}" alt="Image Not Found" height="250px" width="100%">
@endif
<section>
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color: #f2f7f8;">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}"> <i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blogs</a> </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $data->title }}</li>

                </ol>
            </nav>
        </div>
    </div>
    <div class="album" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-12">
                    <div class="mb-4 box-shadow">
                        <div class="card-body" style="padding: 10px 10px 10px 0px;">
                            <h3 class="card-text" style="color: rgb(59, 59, 61);">{{ $data->title }} </h3>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>

                        <div class="btn-group">
                            <div style="float: left;">
                                <small>
                                    <i class="far fa-calendar-alt" style="color: rgb(50, 85, 243);"></i>
                                    <span style="color: tomato;"> {{ $data->date }} </span> &nbsp;
                                    <i class="fas fa-user-edit" style="color: rgb(50, 85, 243);"></i>
                                    <span style="color: tomato;"> {{ $data->writer }} </span> &nbsp;
                                </small>
                            </div>
                        </div>
                    </div>

                    <div>
                        <span style=" text-align: justify;">
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

                <div class="col-lg-4 col-md-4 col-12 latest-blogs">
                    <h5 style="text-align: center;">Latest Blogs</h5>
                    <hr>
                    @foreach ($latest as $latestBlog)
                    <div class="mb-4 box-shadow">
                        <div class="card-body" style="padding: 10px 10px 10px 0px;">
                            <p class="card-text" style="color: rgb(59, 59, 61);"> <strong> {{ $latestBlog->title }}
                                </strong>
                                <br>
                            <div class="btn-group">
                                <div style="float: left;">
                                    <small style="color: tomato;">
                                        <i class="far fa-calendar-alt"></i>
                                        {{ $latestBlog->date }} &nbsp;
                                        <i class="fas fa-user-edit"></i>
                                        {{ $latestBlog->writer }}
                                    </small>
                                </div>
                            </div>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection