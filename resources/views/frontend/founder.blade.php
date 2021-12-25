<style>
    #team {
        background: #eee !important;
    }

    .btn-primary:hover,
    .btn-primary:focus {
        background-color: #108d6f;
        border-color: #108d6f;
        box-shadow: none;
        outline: none;
    }

    .btn-primary {
        color: #fff;
        background-color: #007b5e;
        border-color: #007b5e;
    }

    .pb-5 {
        padding-top: 30px;
    }

    .pb-5 .section-title {
        text-align: center;
        color: #445c56;
        margin-bottom: 40px;
        /* text-transform: uppercase; */
    }

    #team .card {
        border: none;
        background: #ffffff;
    }

    .image-flip:hover .backside,
    .image-flip.hover .backside {
        -webkit-transform: rotateY(0deg);
        -moz-transform: rotateY(0deg);
        -o-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        transform: rotateY(0deg);
        border-radius: .25rem;
    }

    .image-flip:hover .frontside,
    .image-flip.hover .frontside {
        -webkit-transform: rotateY(180deg);
        -moz-transform: rotateY(180deg);
        -o-transform: rotateY(180deg);
        transform: rotateY(180deg);
    }

    .mainflip {
        -webkit-transition: 1s;
        -webkit-transform-style: preserve-3d;
        -ms-transition: 1s;
        -moz-transition: 1s;
        -moz-transform: perspective(1000px);
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        transition: 1s;
        transform-style: preserve-3d;
        position: relative;
    }

    .frontside {
        position: relative;
        -webkit-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        z-index: 2;
        margin-bottom: 30px;
    }

    .backside {
        position: absolute;
        top: 0;
        left: 0;
        background: white;
        -webkit-transform: rotateY(-180deg);
        -moz-transform: rotateY(-180deg);
        -o-transform: rotateY(-180deg);
        -ms-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
        -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    }

    .frontside,
    .backside {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transition: 1s;
        -webkit-transform-style: preserve-3d;
        -moz-transition: 1s;
        -moz-transform-style: preserve-3d;
        -o-transition: 1s;
        -o-transform-style: preserve-3d;
        -ms-transition: 1s;
        -ms-transform-style: preserve-3d;
        transition: 1s;
        transform-style: preserve-3d;
    }

    .frontside .card,
    .backside .card {
        min-height: 312px;
    }

    .backside .card a {
        font-size: 18px;
        color: #007b5e !important;
    }

    .frontside .card .card-title,
    .backside .card .card-title {
        color: #007b5e !important;
    }

    .frontside .card .card-body img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
    }
</style>
@extends('layout.frontend')
@section('title', 'Founders')
@section('desc', 'Founders')
@section('content')
<section class="bg-banner">
    <img src="{{url('/storage/banner/hill.jpg')}}" alt="Image Not found" srcset="" height="250px" width="100%">
</section>
<section>
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color: #f2f7f8;">
                    <li class="breadcrumb-item"><a href="#"> <i class="fas fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Founders</li>
                </ol>
            </nav>
        </div>
    </div>

    <section id="team" class="pb-5">
        <div class="container">
            <h4 class="section-title">Hidden Gem of our Success</h4>
            <div class="row">

                <!-- Team member -->
                @if (isset($data) && !$data->isEmpty())
                @foreach ($data as $team)
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="text-center">
                                        <p><img class="" src="uploads/founder/{{ $team->photo }}" alt="Image not found"
                                                height="300px;" width="100%"></p>
                                        <h4 class="card-title">{{ $team->full_name }} </h4>
                                        <h6 style="margin-bottom: 10px;">{{ $team->designation }}</h6>
                                        {{-- <p class="card-text">This is basic card with image on top, title,
                                            description and button.</p> --}}
                                        {{-- <a href="https://www.fiverr.com/share/qb8D02"
                                            class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">{{ $team->full_name }}</h4>
                                        <p class="card-text">{{$team->description}}</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="{{ $team->linkedin_link }}">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="mailto:{{ $team->email }}">
                                                    <i class="fas fa-envelope"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
                @else
                <tr>
                    <td> No Record(s) of Founders Found.</td>
                </tr>
                @endif


                <!-- ./Team member -->
            </div>
        </div>
    </section>
    @endsection