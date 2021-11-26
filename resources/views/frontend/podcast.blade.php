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
                        <li class="breadcrumb-item"><a href="#"> <i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Podcast</li>
                    </ol>
                </nav>
            </div>
        </div>
        <section>
            <div class="container">
                @if (isset($data) && !$data->isEmpty())
                    @foreach ($data as $podcast)
                        <div class="row"
                            style="margin-bottom: 20px; background-color: #f2fdff; padding: 5px; border-radius: 10px;">
                            <iframe src="{{ $podcast->podcast_link }}" height="auto" width="100%" frameborder=""
                                scrolling="no">
                            </iframe>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>
@endsection
