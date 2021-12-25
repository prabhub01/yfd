@extends('layout.frontend')
@section('title', 'About Us')
@section('desc', $data->description)
{{-- @section('content')
<section class="bg-banner">
    @if (file_exists('uploads/about-us/banner/' . $data->banner) && !empty($data->banner))
    <img src="{{ asset('uploads/about-us/banner/' . $data->banner) }}" alt="Not found" srcset="" width="100%"
        height="250px">
    @else
    <img src="{{ url('/storage/banner/hill.jpg') }}" alt="Image Not Found" height="250px" width="100%">
    @endif
</section>
<section>
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color: #f2f7f8;">
                    <li class="breadcrumb-item"><a href="#"> <i class="fas fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<section class="se-001">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <span style="text-align: justify;">
                    {!! $data->description !!}
                </span>
            </div>
        </div>
    </div>
</section>

<section class="se-001">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="_Ol_er_qw">
                    <p>
                    <h2>Our Story</h2>
                    </p>
                    <span style="text-align: justify;">
                        {!! $data->our_story_desc !!}

                    </span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="_Ol_er_qw yu">
                    @if (file_exists('uploads/about-us/our-story/' . $data->our_story_img) &&
                    !empty($data->our_story_img))
                    <img src="{{ asset('uploads/about-us/our-story/' . $data->our_story_img) }}"
                        alt="Our Story Image Not found" srcset="" width="100%" height="250px">
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="_Ol_er_qw yu">
                    @if (file_exists('uploads/about-us/our-mission/' . $data->our_mission_img) &&
                    !empty($data->our_mission_img))
                    <img src="{{ asset('uploads/about-us/our-mission/' . $data->our_mission_img) }}"
                        alt="Our Mission Image Not found" srcset="" width="100%" height="250px">
                    @endif
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12" style="margin-top: 50px;">
                <div class="_Ol_er_qw">
                    <p>
                    <h2>Our Mission</h2>
                    </p>
                    <span style="text-align: justify;">
                        {!! $data->our_mission_desc !!}
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="_Ol_er_qw">
                    <p>
                    <h2>Our Vision</h2>
                    </p>
                    <span style="text-align: justify;">
                        {!! $data->our_vision_desc !!}
                    </span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="_Ol_er_qw yu">
                    @if (file_exists('uploads/about-us/our-vision/' . $data->our_vision_img) &&
                    !empty($data->our_vision_img))
                    <img src="{{ asset('uploads/about-us/our-vision/' . $data->our_vision_img) }}"
                        alt="Our Vision Image Not found" srcset="" width="100%" height="250px">
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="_Ol_er_qw yu">
                    @if (file_exists('uploads/about-us/our-objectives/' . $data->our_objectives_img) &&
                    !empty($data->our_objectives_img))
                    <img src="{{ asset('uploads/about-us/our-objectives/' . $data->our_objectives_img) }}"
                        alt="Our Objectives Image Not found" srcset="" width="100%" height="330px">
                    @endif
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <div class="_Ol_er_qw">
                    <p>
                    <h2>Our Objectives</h2>
                    </p>
                    <span style="text-align: justify;">
                        {!! $data->our_objectives_desc !!}
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="_Ol_er_qw">
                    <p>
                    <h2>Statement of Non-Discrimination</h2>
                    </p>
                    <span style="text-align: justify;">
                        {!! $data->statement_of_non_descrimination !!}
                    </span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="_Ol_er_qw">
                    <p>
                    <h2>Disclaimer</h2>
                    </p>
                    <span style="text-align: justify;">
                        {!! $data->disclaimer !!}

                    </span>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection --}}
{{-- The Above Content has images. --}}





{{-- Below content contains no image --}}

@section('content')
<section class="bg-banner">
    @if (file_exists('uploads/about-us/banner/' . $data->banner) && !empty($data->banner))
    <img src="{{ asset('uploads/about-us/banner/' . $data->banner) }}" alt="Not found" srcset="" width="100%"
        height="250px">
    @else
    <img src="{{ url('/storage/banner/hill.jpg') }}" alt="Image Not Found" height="250px" width="100%">
    @endif
</section>
<section>
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color: #f2f7f8;">
                    <li class="breadcrumb-item"><a href="#"> <i class="fas fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<section class="se-001">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <span style="text-align: justify;">
                    {!! $data->description !!}
                </span>
            </div>
        </div>
    </div>
</section>

<section class="se-001">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="_Ol_er_qw yu">
                    <p>
                    <h2 style="text-align: left;">Our Mission</h2>
                    </p>
                    <span style="text-align: center;">
                        {!! $data->our_mission_desc !!}
                    </span>

                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <div class="_Ol_er_qw">
                    <p>
                    <h2>Our Vision</h2>
                    </p>
                    <span style="text-align: justify;">
                        {!! $data->our_vision_desc !!}
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="_Ol_er_qw">
                    <p>
                    <h2>Our Story</h2>
                    </p>
                    <p style="text-align: justify;">
                        {!! $data->our_story_desc !!}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="_Ol_er_qw">
                    <p>
                    <h2>Our Objectives</h2>
                    </p>
                    <span style="text-align: justify;">
                        {!! $data->our_objectives_desc !!}
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="_Ol_er_qw">
                    <p>
                    <h2>Statement of Non-Discrimination</h2>
                    </p>
                    <span style="text-align: justify;">
                        {!! $data->statement_of_non_descrimination !!}
                    </span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="_Ol_er_qw">
                    <p>
                    <h2>Disclaimer</h2>
                    </p>
                    <span style="text-align: justify;">
                        {!! $data->disclaimer !!}

                    </span>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection