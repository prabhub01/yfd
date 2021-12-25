<style>
    h2 {
        text-align: center;
        padding: 20px;
    }

    /* Slider */

    .slick-slide {
        margin: 0px 40px;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-slider {
        position: relative;
        display: block;
        box-sizing: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent;
    }

    .slick-list {
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    .slick-list:focus {
        outline: none;
    }

    .slick-list.dragging {
        cursor: pointer;
        cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .slick-track {
        position: relative;
        top: 0;
        left: 0;
        display: block;
    }

    .slick-track:before,
    .slick-track:after {
        display: table;
        content: '';
    }

    .slick-track:after {
        clear: both;
    }

    .slick-loading .slick-track {
        visibility: hidden;
    }

    .slick-slide {
        display: none;
        float: left;
        height: 30%;
        min-height: 1px;
    }

    [dir='rtl'] .slick-slide {
        float: right;
    }

    .slick-slide img {
        display: block;
    }

    .slick-slide.slick-loading img {
        display: none;
    }

    .slick-slide.dragging img {
        pointer-events: none;
    }

    .slick-initialized .slick-slide {
        display: block;
    }

    .slick-loading .slick-slide {
        visibility: hidden;
    }

    .slick-vertical .slick-slide {
        display: block;
        height: auto;
        border: 1px solid transparent;
    }

    .slick-arrow.slick-hidden {
        display: none;
    }




    /* For testimonial  */

    .client-img {
        width: 120px;
        height: 120px;
        overflow: hidden;
        border: 4px solid #fff;
        margin: 0px auto 20px;
        border-radius: 100%;
    }

    .carousel-content {
        padding: 50px 0px;
    }

    .carousel-content h3 span {
        font-size: 17px;
        font-weight: normal;
        color: #e8e8e8;
        text-transform: uppercase;
    }

    .client-img img {
        width: 100%;
    }

    #testimonial {
        width: 100%;
        text-align: center;
        color: #000;
    }

    #testimonial .carousel-control-prev,
    #testimonial .carousel-control-next {
        font-size: 36px;
    }

    #testimonial h2 {
        font-size: 40px;
        font-style: italic;
        border-bottom: 1px solid #7fbdff;
        padding-bottom: 20px;
        display: inline-block;
    }

    .heroContent {
        position: absolute;
        top: 50%;
        left: 30%;
        padding-bottom: 10%;
        transform: translate(-50%, -50%);
    }

    @media (max-width: 400px) {
        .banner-text {
            font-weight: bold;
            font-size: 25px;
        }
    }

    @media (max-width: 550px) {
        .banner-text {
            font-weight: bold;
            font-size: 30px;
            /* -webkit-text-stroke: 0.8px rgb(255, 255, 255); */
        }
    }

    @media (min-width: 750px) {
        .banner-text {
            font-weight: bold;
            font-size: 50px;
            -webkit-text-stroke: 0.8px rgb(255, 255, 255);
        }
    }

    /* @media screen and (min-width: 900px) {
        .banner-text {
            font-weight: bold;
            font-size: 50px;
            -webkit-text-stroke: 0.8px rgb(255, 255, 255);
        }
    }

    @media screen and (max-width: 800px) {
        .banner-text {
            font-weight: bold;
            font-size: 30px;
            -webkit-text-stroke: 0.8px rgb(255, 255, 255);
        }
    }

    @media screen and (max-width: 700px) {
        .banner-text {
            font-weight: bold;
            font-size: 25px;
            -webkit-text-stroke: 0.8px rgb(255, 255, 255);
        }
    }

    @media screen and (max-width: 600px) {
        .banner-text {
            font-weight: bold;
            font-size: 20px;
            -webkit-text-stroke: 0.8px rgb(255, 255, 255);
        }
    } */

    @media screen and (max-width: 500px) {
        .banner-text {
            font-weight: bold;
            font-size: 15px;
            -webkit-text-stroke: 0.8px rgb(255, 255, 255);
        }
    }


    /* Our impact icon after color */
    .counter {
        background-color: #2393c0;
        width: 100%;
    }

    .counter:after {
        /* background-color: linear-gradient(45deg, #ffffff 49%, #f8f8f8 50%); */
        background-color: #000;
    }

    .counter .counter-icon {}

    .counter-icon {
        padding-top: 7%;
    }
</style>
@extends('layout.frontend')
@section('title', 'Home')
@section('content')

<div class="">
    <div class=" row">
        <div class="col-sm-12">
            <img src="{{ asset('img/new_banner.jpg') }}" alt="test" class="img-fluid">
            <div class="heroContent">
                <h1 class="banner-text">YOUTH - LED THINK <br>TANK FOR CIVIC <br>ENGAGEMENT</h1>
                {{-- <p class="pHero">
                    This is the first line in the jumbotron.<br>
                    The second line appears underneath the first line.
                </p>
                <button type="button" class="btn btn-primary">Chat With Us</button> --}}
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> तर्क संगालो </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('img/notice/tarka_sangalo.png') }}" alt="">
            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                <a href="{{ route('about-us') }}"><button type="button" class="btn btn-primary btn-sm">Learn
                        More</button></a>
            </div>
        </div>
    </div>
</div>


{{-- <section id="carouselExampleFade" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/banner/banner-1.jpg') }}" class="" alt=" ...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/banner/banner-2.jpg') }}" class="" alt=" ...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/banner/banner-3.jpg') }}" class="" alt=" ...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section> --}}

<!-- ====================== section started====================== -->

<section class="bg-01" style="padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div style="width: 100%;">
                <div class="heading">
                    <h2>Engaging Youth in Understanding Federalism</h2>
                </div>
            </div>

            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="se-box">
                    <a href="{{ route('about-us') }}">
                        <div class="icon" style="font-size: 40px; padding-top:8px; color: #2393c0;">
                            <i class="fas fa-praying-hands"></i>
                        </div>
                    </a>
                    <div class="content">
                        <a href="{{ route('about-us') }}">
                            <h3>Who are We?</h3>
                            <p>We are a group of young enthusiasts who thrive in every circumstance. We are continuously
                                moving</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="se-box">
                    <a href="{{ route('partner-with-us') }}">
                        <div class="icon" style="font-size: 40px; padding-top:8px; color: #2393c0;">
                            <i class="far fa-handshake"></i>
                        </div>
                    </a>
                    <div class="content">
                        <a href="{{ route('partner-with-us') }}">
                            <h3>Partner with us </h3>
                            <p>Join us to work collaboratively for the common goal </p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="se-box">
                    <a href="{{ route('about-us') }}">
                        <div class="icon" style="font-size: 40px; padding-top:8px; color: #2393c0;">
                            <i class="fas fa-briefcase"></i>
                        </div>
                    </a>
                    <div class="content">
                        <a href="{{ route('about-us') }}">
                            <h3>What we Do?</h3>
                            <p>Our aim is to incorporate various activities inside the social science field.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====================== section started====================== -->
{{-- <section class="bg-01-1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading">
                    <h2>OUR WORKING AREAS</h2>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="se-box">
                    <div class="icon">
                        <i class="far fa-lightbulb"></i>
                    </div>
                    <div class="content">
                        <h3>Get Inspired</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="se-box">
                    <div class="icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="content">
                        <h3>Give Donation</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="se-box">
                    <div class="icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <div class="content">
                        <h3>Become a Volunteer</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="se-box">
                    <div class="icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <div class="content">
                        <h3>Help The Children</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- ====================== Featured started====================== -->

{{-- <section class="bg-02">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading">
                    <h2>Ideas & Innovations</h2> --}}
                    {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime totam quo, ducimus aliquid
                        quisquam
                        minima perspiciatis repellendus, minus tenetur reiciendis quis? Consequatur perferendis
                        deleniti, rerum
                        delectus consectetur modi praesentium deserunt.</p> --}}
                    {{--
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="featured-box">
                    <div class="feature-card">
                        <a href="#"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/causes/4.jpg') }}">
                    </div>
                    <div class="content">
                        <h3>Ideas & Innovations 1</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p> --}}
                        {{-- <ol>
                            <li>Year Full</li>
                            <li>100 Children</li>
                            <li>any time</li>
                        </ol> --}}
                        {{--
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="featured-box">
                    <div class="feature-card">
                        <a href="#"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/causes/3.jpg') }}">
                    </div>
                    <div class="content">
                        <h3>Ideas & Innovations 2</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p> --}}
                        {{-- <ol>
                            <li>Year Full</li>
                            <li>100 Children</li>
                            <li>any time</li>
                        </ol> --}}
                        {{--
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="featured-box">
                    <div class="feature-card">
                        <a href="#"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/causes/2.jpg') }}">
                    </div>
                    <div class="content">
                        <h3>Ideas & Innovations 3</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p> --}}
                        {{-- <ol>
                            <li>Year Full</li>
                            <li>100 Children</li>
                            <li>any time</li>
                        </ol> --}}
                        {{--
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="featured-box">
                    <div class="feature-card">
                        <a href="#"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/causes/1.jpg') }}">
                    </div>
                    <div class="content">
                        <h3>Ideas & Innovations 4</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p> --}}
                        {{-- <ol>
                            <li>Year Full</li>
                            <li>100 Children</li>
                            <li>any time</li>
                        </ol> --}}
                        {{--
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="featured-box">
                    <div class="feature-card">
                        <a href="#"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/causes/5.jpg') }}">
                    </div>
                    <div class="content">
                        <h3>Ideas & Innovations 5</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p> --}}
                        {{-- <ol>
                            <li>Year Full</li>
                            <li>100 Children</li>
                            <li>any time</li>
                        </ol> --}}
                        {{--
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="featured-box">
                    <div class="feature-card">
                        <a href="#"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/causes/6.jpg') }}">
                    </div>
                    <div class="content">
                        <h3>Ideas & Innovations 6</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor</p> --}}
                        {{-- <ol>
                            <li>Year Full</li>
                            <li>100 Children</li>
                            <li>any time</li>
                        </ol> --}}
                        {{--
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> --}}

{{-- =================================================================== --}}

<section style="background-color: #fff;">
    <div class="container">
        <div class="row" style="padding-bottom: 1rem;">
            <div class="col-12" style="padding-bottom: 20px;">
                <div class="heading">
                    <h2>Our Impact</h2>
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt</p> --}}
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="counter">
                    <div class="counter-icon">
                        <i class=" fas fa-school"></i>
                    </div>
                    <h3 style="margin-top: -20px;">Youth directly reached </h3>
                    <span class="counter-value">600 </span> <span style="font-size: 25px;">+ </span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 style="margin-top: -7px;">Organisations Partnered</h3>
                    <span class="counter-value">12</span> <span style="font-size: 25px;">+ </span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Programs Conducted</h3>
                    <span class="counter-value">16</span> <span style="font-size: 25px;">+ </span>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <section class="bg-03">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <div class="_lk_bg_cd">
                    <i class="fas fa-school"></i>
                    <div class="counting" data-count="128">128</div>
                    <h5>Primary Schools</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <div class="_lk_bg_cd">
                    <i class="fal fa-hospitals"></i>
                    <div class="counting" data-count="300">300</div>
                    <h5>Hospitals</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <div class="_lk_bg_cd">
                    <i class="fal fa-hands-helping"></i>
                    <div class="counting" data-count="250">250</div>
                    <h5>Volunteers</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <div class="_lk_bg_cd">
                    <i class="fal fa-trophy"></i>
                    <div class="counting" data-count="400">400</div>
                    <h5>Winning Awards</h5>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- ====================== Blog Section started====================== -->

{{-- <section class="bg-04">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading">
                    <h2>News & Stories</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <article class="_lk_bg_sd_we">
                    <a href="#">
                        <div class="_bv_xs_we"> <img src="{{ asset('img/blog/blog_3.jpg') }}"></div>
                    </a>
                    <div class="_xs_we_er">
                        <div class="_he_w">
                            <a href="">
                                <h3>Partnering to create a community</h3>
                            </a>
                            <ol>
                                <li><span>by</span> prajwol<span class="_mn_cd_xs">june 30, 2020</span></li>
                            </ol>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore.
                            </p>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <article class="_lk_bg_sd_we">
                    <a href="#">
                        <div class="_bv_xs_we"> <img src="{{ asset('img/blog/blog_3.jpg') }}"></div>
                    </a>
                    <div class="_xs_we_er">
                        <div class="_he_w">
                            <a href="">
                                <h3>Partnering to create a community</h3>
                            </a>
                            <ol>
                                <li><span>by</span> prajwol<span class="_mn_cd_xs">june 30, 2020</span></li>
                            </ol>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore.
                            </p>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <article class="_lk_bg_sd_we">
                    <a href="#">
                        <div class="_bv_xs_we"> <img src="{{ asset('img/blog/blog_3.jpg') }}"></div>
                    </a>
                    <div class="_xs_we_er">
                        <div class="_he_w">
                            <a href="">
                                <h3>Partnering to create a community</h3>
                            </a>
                            <ol>
                                <li><span>by</span> prajwol<span class="_mn_cd_xs">june 30, 2020</span></li>
                            </ol>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore.
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section> --}}

<section class="bg-04" style="padding: 0px;">
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2>Latest Blogs</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @if (isset($blog) && !$blog->isEmpty())
                @foreach ($blog as $key => $blogs)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        {{-- <div class="ribbon-wrapper">
                            <div class="ribbon" style="color: darkslategrey;">Past</div>
                        </div> --}}
                        @if (file_exists('uploads/blogs/image/' . $blogs->image) && !empty($blogs->image))
                        <img src="/uploads/blogs/image/{{ $blogs->image }}" alt="Image Not found" srcset=""
                            style="height: 200px;">
                        @else
                        <img class="card-img-top" src="{{ asset('img/sample/2.jpg') }}" alt="" style="height: 200px;">
                        @endif
                        <div class="card-body">
                            <a href="{{ route('blog-details', $blogs->slug) }}">
                                <h6 class="card-text">{{ $blogs->title }} </h6>
                            </a>
                            <p style="text-align: justify; font-size: 14px; margin-top: 5px;">
                                {!! Str::limit($blogs->description, 250) !!}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group" style="padding-top: 20px;">
                                    <div style="float: left;">
                                        <small>
                                            <i class="far fa-calendar-alt" style="color: rgb(50, 85, 243);"></i>
                                            <span style="color: rgb(37, 37, 37);"> {{ $blogs->date }} </span>
                                            &nbsp;
                                            <i class="fas fa-user-edit" style="color: rgb(50, 85, 243);"></i>
                                            <span style="color: rgb(37, 37, 37);"> {{ $blogs->writer }}
                                            </span> &nbsp;
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <tr>
                    <td> No Latest Blog(s) Found.</td>
                </tr>
                @endif
            </div>
        </div>
    </div>

</section>

<div class="row" style="background-color: rgb(241, 239, 239);">
    <div class="col-lg-12 col-md-12 col-12">
        <div class="_Ol_er_qw" style="text-align: center; margin-top: 50px;">
            <div class="heading">
                <h2>Hear from our Partners</h2>
            </div>
        </div>
    </div>
    <!-- Testimonial Slider Section -->
    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
                        @if (isset($testimonial) && !$testimonial->isEmpty())
                        <!-- Slide Indicators -->
                        <ol class="carousel-indicators">
                            @foreach ($testimonial as $key => $testimonials)
                            <li data-target="#testimonialCarousel" data-slide-to="{{ $key }}"
                                class="@if ($key == 0) active @endif">
                            </li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            @foreach ($testimonial as $key => $testimonials)
                            <!-- Slide 1 -->
                            <div class="carousel-item @if ($key == 0) active @endif">
                                <div class="carousel-content">
                                    <div class="client-img"><img
                                            src="{{ url('/uploads/testimonial/' . $testimonials->image) }}"
                                            alt="Testimonial Slider"></div>
                                    <h3>{{ $testimonials->name }} </h3>
                                    <span> <small> <em> {{ $testimonials->company }},
                                                {{ $testimonials->location }}</em></small> </span>
                                    <p class="col-md-8 offset-md-2" style="padding-top: 10px;">{{
                                        $testimonials->description }}</p>
                                </div>
                            </div>
                            @endforeach
                            <!-- Slider pre and next arrow -->
                            <a class="carousel-control-prev text-white" href="#testimonialCarousel" role="button"
                                data-slide="prev">
                                <i class="fas fa-chevron-left" style="color: #000;"></i>
                            </a>
                            <a class="carousel-control-next text-white" href="#testimonialCarousel" role="button"
                                data-slide="next">
                                <i class="fas fa-chevron-right" style="color: #000;"></i>
                            </a>
                        </div>
                        @else
                        <p>Testimonial(s) Not Found</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="slideshow ">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($testimonial as $key => $testimonials)
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $key }}"
                    class="@if ($key == 0) active @endif">
                </li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach ($testimonial as $key => $banner)
                <div class="carousel-item @if ($key == 0) active @endif">

                    <div class=" container">
                        <div class="row">

                            <div class="col-lg-8  col-md-8 "> </div>
                            <div class="col-lg-4  col-md-4 slidecaptionwrapper  ">
                                <div class="slidecaption">
                                    <h2>{{ $banner->name }}</h2>
                                    <h3>{{ $banner->company }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{ url('/uploads/testimonial/' . $testimonials->image) }}" alt="Testimonial Slider">
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </section> --}}
    <!-- End Testimonial Slider Section -->


</div>


<div class="section" style="background-color: #fff;">
    <div class="heading">
        <h2 class="white">Our Partners</h2>
    </div>
    <section class="customer-logos slider white">
        <a href="https://www.facebook.com/KMC-Alumni-Legal-Sector-KALS-297082104144409" target="_blank">
            <div class="slide"><img src="{{ asset('img/partners/kmc.png') }}"></div>
        </a>
        <a href="https://www.facebook.com/kmcalumniassociationofficial/" target="_blank">
            <div class="slide"><img src="{{ asset('img/partners/kmc2.jpg') }}"></div>
        </a>
        <a href="https://ksl.edu.np/" target="_blank">
            <div class="slide"><img src="{{ asset('img/partners/ksl.png') }}"></div>
        </a>
        <a href="https://www.facebook.com/LeadershipForumPokhara" target="_blank">
            <div class="slide"><img src="{{ asset('img/partners/leadershipforumpokhara.jpg') }}"></div>
        </a>
        <a href="https://medlifestories.com/#/" target="_blank">
            <div class="slide"><img src="{{ asset('img/partners/medlife.jpg') }}"></div>
        </a>
        <a href="https://nalcnepal.com/" target="_blank">
            <div class="slide"><img src="{{ asset('img/partners/nalc.jpg') }}"></div>
        </a>
        <a href="http://nhc.org.np/" target="_blank">
            <div class="slide"><img src="{{ asset('img/partners/nepalhealthcorp.png') }}"></div>
        </a>
        <a href="https://www.facebook.com/RotaractTripureswor" target="_blank">
            <div class="slide"><img src="{{ asset('img/partners/rotaract.png') }}"></div>
        </a>
        <a href="https://uniglobecollege.edu.np/" target="_blank">
            <div class="slide"><img src="{{ asset('img/partners/uniglobe.png') }}"></div>
        </a>
    </section>
</div>
@endsection