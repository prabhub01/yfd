<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    /* body {
 font-family: "Open Sans", sans-serif;
} */
    /* h2 {
 color: #333;
 text-align: center;
 text-transform: uppercase;
 font-family: "Roboto", sans-serif;
 font-weight: bold;
 position: relative;
 margin: 25px 0 50px;
}
h2::after {
 content: "";
 width: 100px;
 position: absolute;
 margin: 0 auto;
 height: 3px;
 background: #ffdc12;
 left: 0;
 right: 0;
 bottom: -10px;
} */
    .carousel {
        width: 650px;
        margin: 0 auto;
        padding-bottom: 50px;
    }

    .carousel .carousel-item {
        color: #999;
        font-size: 14px;
        text-align: center;
        overflow: hidden;
        min-height: 340px;
    }

    .carousel .carousel-item a {
        color: #eb7245;
    }

    @media only screen and (max-width: 768px) {
        .carousel .img-box {
            width: 145px;
            height: 145px;
            margin: 0 auto;
            border-radius: 50%;
        }
    }

    .carousel .img-box {
        width: 145px;
        height: 145px;
        margin: 0 auto;
        border-radius: 50%;
    }

    @media only screen and (max-width: 768px) {
        .carousel .img-box img {
            width: 50%;
            height: 100%;
            display: block;
            border-radius: 50%;
        }
    }

    .carousel .img-box img {
        width: 100%;
        height: 100%;
        display: block;
        border-radius: 50%;
    }

    @media only screen and (max-width: 768px) {
        .carousel .testimonial {
            width: 100%;
        }
    }

    .carousel .testimonial {
        padding: 30px 0 10px;
        color: #000;
    }

    .carousel .overview {
        text-align: center;
        padding-bottom: 5px;
    }

    .carousel .overview b {
        color: #333;
        font-size: 15px;
        text-transform: uppercase;
        display: block;
        padding-bottom: 5px;
    }

    .carousel .overview p {
        color: rgb(219, 213, 213);
        font-size: 15px;
        /* text-transform: uppercase;
 display: block;
 padding-bottom: 5px; */
    }

    .carousel .star-rating i {
        font-size: 18px;
        color: #ffdc12;
    }

    @media only screen and (max-width: 768px) {

        .carousel-control-prev,
        .carousel-control-next {
            display: none;
            background-color: rgb(241, 239, 239);

        }
    }

    .carousel-control-prev,
    .carousel-control-next {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: rgb(241, 239, 239);
        text-shadow: none;
        top: 4px;
    }

    @media only screen and (max-width: 768px) {

        .carousel-control-prev i,
        .carousel-control-next i {
            font-size: 30px;
            margin-right: 2px;
        }
    }

    .carousel-control-prev i,
    .carousel-control-next i {
        font-size: 20px;
        margin-right: 2px;
    }

    .carousel-control-prev {
        left: auto;
        right: 40px;
    }

    .carousel-control-next i {
        margin-right: -2px;
    }

    .carousel .carousel-indicators {
        bottom: 15px;
    }

    .carousel-indicators li,
    .carousel-indicators li.active {
        width: 11px;
        height: 11px;
        margin: 1px 5px;
        border-radius: 50%;
    }

    .carousel-indicators li {
        background: #e2e2e2;
        border: none;
    }

    .carousel-indicators li.active {
        background: #888;
    }

    .title_h3 {
        color: #000;
    }

    .ol_h2 {
        text-align: center;
        font-family: 'Brush Script MT', 'Brush Script Std', 'cursive';
    }

</style>

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
                        <li class="breadcrumb-item"><a href="#"> <i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Join Us</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container">
            <div class="row" style="margin-top: 20px;">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="_Ol_er_qw" style="text-align: center;">
                        <p>
                        <h3 class="title_h3">Join Our Mission</h3>
                        </p>
                        <p style="text-align: center;">
                            We are always looking forward to having you become a part of us.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="_Ol_er_qw" style="text-align: center; margin-top: 50px;">
                        <p>
                        <h5 class="title_h3">Why to Join Our Team ?</h5>
                        </p>
                        <p style="text-align: center;">
                            With 15 programs designed and implemented successfully, 3000+ youths connected to us, and 10 +
                            partners associated with us, being a member
                            of YFD/ YFD membership offers/means:

                        </p>
                    </div>
                </div>
            </div>

            <div class="row" style="padding-top: 20px;">
                <div class="col-lg-4 col-md-4 col-6" style="margin-bottom: 20px;">
                    <div class="card border-primary">
                        <div class="card-header" style="text-align: center;">Network expansion</div>
                        <div class="card-body text-primary">
                            <p class="card-text" style="text-align: justify; color: #000;">
                                As a member of YFD, you will get ample opportunities to work with experts, civil society
                                members, and youths from diverse backgrounds yet with similar interests, and to develop good
                                relation with them.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6" style="margin-bottom: 20px;">
                    <div class="card border-primary">
                        <div class="card-header" style="text-align: center;">Professionalism</div>
                        <div class="card-body text-primary">
                            <p class="card-text" style="text-align: justify; color: #000;">
                                Working in a professional environment and being a core part of our various professional
                                development
                                events, such as workshop, seminar, trainings, you will sharpen your professional skills.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6" style="margin-bottom: 20px;">
                    <div class="card border-primary">
                        <div class="card-header" style="text-align: center;">Learning and Growing opportunity</div>
                        <div class="card-body text-primary">
                            <p class="card-text" style="text-align: justify; color: #000;">
                                The projects we conduct will help you gain abundant knowledge, experience,
                                skills (leadership skills, social skills, time management skills) and the best use
                                of your existing knowledge and experience.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6" style="margin-bottom: 20px;">
                    <div class="card border-primary">
                        <div class="card-header" style="text-align: center;">Profile raise</div>
                        <div class="card-body text-primary">
                            <p class="card-text" style="text-align: justify; color: #000;">
                                The membership is bound to raise your profile in the professional community through various
                                trainings we
                                offer such as blog writing,
                                report writing, podcast making, et cetera. You will collect competencies to better your
                                resume.

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6" style="margin-bottom: 20px;">
                    <div class="card border-primary">
                        <div class="card-header" style="text-align: center;">Independence and leadership</div>
                        <div class="card-body text-primary">
                            <p class="card-text" style="text-align: justify; color: #000;">
                                You get to work with a highly supportive and guiding team, who acknowledge your efforts and
                                value
                                your
                                contributions. Members are highly encouraged to design, implement and take lead of projects
                                and
                                programs
                                under our flagship.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6" style="margin-bottom: 20px;">
                    <div class="card border-primary">
                        <div class="card-header" style="text-align: center;">Future opportunities</div>
                        <div class="card-body text-primary">
                            <p class="card-text" style="text-align: justify; color: #000;">
                                Once you become a member and serve the organization throughout your term, you are offered to
                                work
                                with us beyond your expectations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="margin-bottom: 40px;">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="_Ol_er_qw" style="text-align: center; margin-top: 50px;">
                        <p>
                        <h3 class="title_h3">How to Apply ?</h3>
                        </p>
                        <p style="text-align: center;">
                            YFD looks forward to work with enthusiastic youths between 18 to 25 years of age. Being a
                            member,
                            you will be able to discover your own
                            potentialities through active engagement within its thematic areas of your interest. You simply
                            need
                            to fill up the online
                            <a href="#"> membership form</a>. Once the application is reviewed from the team, YFD contacts
                            you
                            through email and proceed ahead with further process.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row" style="background-color: rgb(241, 239, 239);">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="_Ol_er_qw" style="text-align: center; margin-top: 50px; padding-bottom: 50px; ">
                    <p>
                    <h3 class="title_h3">Hear from our existing members </h3>
                    </p>
                </div>
            </div>
            <br> <br> <br>

            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="background-color: rgb(241, 239, 239);">
                <!-- Carousel indicators -->
                {{-- <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol> --}}
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="img-box"><img src="{{ asset('img/team/team1.png') }}" alt=""></div>
                        <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia.
                            Etiam
                            faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus
                            risus,
                            volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                        <p class="overview"><b>Michael Holz</b> <span class="p"> Seo Analyst at <a
                                    href="#">OsCorp
                                    Tech.</a></span> </p>
                    </div>
                    <div class="carousel-item">
                        <div class="img-box"><img src="{{ asset('img/team/team2.png') }}" alt=""></div>
                        <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
                            tempor,
                            varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.
                            Vestibulum idac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.
                        </p>
                        <p class="overview"><b>Paula Wilson</b><span class="p"> Seo Analyst at <a
                                    href="#">OsCorp
                                    Tech.</a></span> </p>
                    </div>
                    <div class="carousel-item">
                        <div class="img-box"><img src="{{ asset('img/team/team3.png') }}" alt=""></div>
                        <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a
                            mi
                            suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis.
                            Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor
                            velit.
                        </p>
                        <p class="overview"><b>Antonio Moreno</b><span class="p"> Seo Analyst at <a
                                    href="#">OsCorp
                                    Tech.</a></span> </p>
                        {{-- <div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
				</ul>
			</div> --}}
                    </div>
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-angle-left" style="color: #000;"></i>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <i class="fa fa-angle-right" style="color: #000;"></i>
                </a>
            </div>
        </div>
        </div>

    @endsection
