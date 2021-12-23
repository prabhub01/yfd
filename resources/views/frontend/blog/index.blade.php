@extends('layout.frontend')
@section('content')
<section class="bg-banner">
    <img src="{{ url('/storage/banner/hill.jpg') }}" alt="Image Not Found" height="250px" width="100%">
</section>
<section>
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color: #f2f7f8;">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}"> <i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="album bg-light">
        <div class="container">
            <div class="row" style="padding-top: 20px;">

                @if (isset($data) && !$data->isEmpty())
                @foreach ($data as $key => $blog)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        {{-- <div class="ribbon-wrapper">
                            <div class="ribbon" style="color: darkslategrey;">Past</div>
                        </div> --}}
                        @if (file_exists('uploads/blogs/image/' . $blog->image) && !empty($blog->image))
                        <img src="{{ asset('uploads/blogs/image/' . $blog->image) }}" alt="Image Not found" srcset=""
                            width="100%" height="100%">
                        @else
                        <img src="{{ asset('img/' . 'no-image.png') }}" alt="Image Not found" srcset="" width="100%"
                            height="100%">
                        @endif

                        <div class="card-body">
                            <a href="{{ route('blog-details', $blog->slug) }}">
                                <h4 class="card-text">{{ $blog->title }} </h4>
                            </a>

                            <p style="text-align: justify;">{{ Str::limit($blog->excerpt, 300) }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <div style="float: left;">
                                        <small style="color: tomato;">
                                            <i class="far fa-calendar-alt"></i>
                                            {{ $blog->date }} &nbsp;
                                            <i class="fas fa-user-edit"></i>
                                            {{ $blog->writer }}
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