<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/yfd-logo-only.png') }}">
    <title>YFD || Youth in Federal Discourse</title>


    {{--
    <link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .nav-link {
            color: #fff;
        }

        .body {
            background-color: #fff;
        }

        .white {
            background-color: #fff;
        }

        .latest-blogs {
            background-color: rgb(245, 238, 238);
            padding-top: 30px;
            border-radius: 10px;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <!-- ======================header started====================== -->

    {{-- <header>
        <div class="my-nav">
            <div class="container">
                <div class="row">
                    <div class="nav-items">
                        <div class="menu-toggle"></div>
                        <div class="logo">
                            <img src="{{ asset('img/yfd.png') }}">
                        </div>
                        <div class="menu-items">
                            <div class="menu">
                                <ul>
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            About
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('about-us') }}"
                                                style="color: black;">About Us</a>
                                            <a class="dropdown-item" href="{{ route('our-team') }}"
                                                style="color: black;">Our Team</a>
                                            <a class="dropdown-item" href="#" style="color: black;">Annual Reports</a>
                                            <a class="dropdown-item" href="#" style="color: black;">Financial
                                                Reports</a>
                                        </div>
                                    </li>
                                    <li><a href="services.html">Thematic Areas</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Support
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('partner-with-us') }}"
                                                style="color: black;">Partner With Us</a>
                                            <a class="dropdown-item" href="{{ route('join-us') }}"
                                                style="color: black;">Become a member</a>
                                            <a class="dropdown-item" href="{{ route('volunteer') }}"
                                                style="color: black;">Volunteer</a>
                                            <a class="dropdown-item" href="{{ route('donate') }}"
                                                style="color: black;">Donate</a>
                                            <a class="dropdown-item" href="{{ route('write-for-us') }}"
                                                style="color: black;">Write for us</a>
                                            <a class="dropdown-item" href="{{ route('speak-with-us') }}"
                                                style="color: black;">Speak with us</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Events
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('event') }}" style="color: black;">
                                                Latest Events</a>
                                            <a class="dropdown-item" href="{{ route('past-event') }}"
                                                style="color: black;">Past Events</a>
                                            <a class="dropdown-item" href="{{ route('next-event') }}"
                                                style="color: black;">Upcoming Events</a>
                                        </div>
                                    </li>
                                    <li><a href="{{ route('event') }}">Events</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Publication
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#" style="color: black;">Blogs</a>
                                            <a class="dropdown-item" href="#" style="color: black;">Podcasts</a>
                                            <a class="dropdown-item" href="#" style="color: black;">Newspaper
                                                Articles</a>
                                            <a class="dropdown-item" href="#" style="color: black;">Infographics</a>
                                            <a class="dropdown-item" href="#" style="color: black;">Journals</a>
                                            <a class="dropdown-item" href="#" style="color: black;">Policy Analysis</a>
                                        </div>
                                    </li>
                                    <li><a href="{{ route('contact-us') }}">Contact</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> --}}

    <!-- NAVBAR-->
    <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm"
        style="background-color: rgba(143, 121, 125, 0.322);">
        <div class="container">
            <a href="#" class="navbar-brand">
                <!-- Logo Image -->
                {{-- <img src="https://res.cloudinary.com/mhmd/image/upload/v1557368579/logo_iqjuay.png" width="45"
                    alt="" class="d-inline-block align-middle mr-2"> --}}
                <a href="{{ route('index') }}"> <img src="{{ asset('img/yfdLogo.png') }}"> </a>
                <!-- Logo Text -->
            </a>

            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{ route('index') }}" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('about-us') }}" style="color: black;">About
                                Us</a>
                            <a class="dropdown-item" href="{{ route('our-team') }}" style="color: black;">Our
                                Team</a>
                            <a class="dropdown-item" href="{{ route('our-founder') }}" style="color: black;">Our
                                Founders</a>
                            <a class="dropdown-item" href="{{ route('agm-report') }}" style="color: black;">Annual
                                Reports</a>
                            {{-- <a class="dropdown-item" href="#" style="color: black;">Financial
                                Reports</a> --}}
                        </div>
                    </li>
                    <li class="nav-item"><a href="{{ route('thematic-areas') }}" class="nav-link">Thematic
                            Areas</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Support
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('partner-with-us') }}" style="color: black;">Partner
                                With Us</a>
                            <a class="dropdown-item" href="{{ route('join-us') }}" style="color: black;">Become a
                                member</a>
                            <a class="dropdown-item" href="{{ route('volunteer') }}" style="color: black;">Volunteer</a>
                            <a class="dropdown-item" href="{{ route('donate') }}" style="color: black;">Donate</a>
                            <a class="dropdown-item" href="{{ route('write-for-us') }}" style="color: black;">Write
                                for us</a>
                            <a class="dropdown-item" href="{{ route('speak-with-us') }}" style="color: black;">Speak
                                with us</a>
                        </div>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Events
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('event') }}" style="color: black;"> Latest
                                Events</a>
                            <a class="dropdown-item" href="{{ route('past-event') }}" style="color: black;">Past
                                Events</a>
                            <a class="dropdown-item" href="{{ route('next-event') }}" style="color: black;">Upcoming
                                Events</a>
                        </div>
                    </li> --}}
                    <li class="nav-item"><a href="{{ route('event') }}" class="nav-link">Events</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Publication
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('blog') }}" style="color: black;">Blogs</a>
                            <a class="dropdown-item" href="{{ route('podcast') }}" style="color: black;">Podcasts</a>
                            {{-- <a class="dropdown-item" href="#" style="color: black;">Newspaper
                                Articles</a> --}}
                            {{-- <a class="dropdown-item" href="#" style="color: black;">Infographics</a> --}}
                            {{-- <a class="dropdown-item" href="#" style="color: black;">Journals</a>
                            <a class="dropdown-item" href="#" style="color: black;">Policy Analysis</a> --}}
                        </div>
                    </li>
                    <li class="nav-item"><a href="{{ route('contact-us') }}" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ====================== Header and Menu bar ended====================== -->

    @yield('content')

    <!-- ====================== Footer Section started====================== -->


    <footer style="padding-top: 0%; padding-bottom: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="_kl_de_w">
                        <div class="logo">
                            {{-- <img src="{{ asset('img/yfd-logo-only.png') }}" height="20%" width="30%"> --}}
                            <a href="{{ route('index') }}"> <img src="{{ asset('img/yfdLogo.png') }}"> </a>
                            <hr>
                        </div>
                        <p style="text-align: justify;">Youth in Federal Discourse (YFD) is an organization designed to
                            give a platform to youths in understanding the new federal setup of the Federal Democratic
                            Republic of Nepal.</p>
                        <a href="#"> <button type="button" class="btn btn-info btn-sm">Read More</button> </a> <br> <br>
                        <p class="social-links">
                            <a href="https://www.facebook.com/youthinfederaldiscourse"><i class="fab fa-facebook"></i>
                            </a>
                            <a
                                href="https://twitter.com/YDiscourse?fbclid=IwAR1FvGb_H4vNkiVqPS5Hl8okIXYqiSvUAm1E_eu0ZhL941MHpc1JM6OWcIo"><i
                                    class="fab fa-twitter-square"></i> </a>
                            <a
                                href="https://www.instagram.com/youthinfederaldiscourse/?fbclid=IwAR26caIEBVZ4eolsXw51hJstTyQ2qpktSy3n3anP-kPIaepfCu2puEjbv0Q"><i
                                    class="fab fa-instagram-square"></i> </a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="_kl_de_w">
                        <h3>Quick Links</h3>
                        <ol>
                            <a href="{{ route('about-us') }}">
                                <li>
                                    <i class="fas fa-angle-double-right"></i>About Us
                                </li>
                            </a>
                            <a href="{{ route('partner-with-us') }}">
                                <li>
                                    <i class="fas fa-angle-double-right"></i>Partner with Us
                                </li>
                            </a>
                            <a href="{{ route('our-team') }}">
                                <li>
                                    <i class="fas fa-angle-double-right"></i>Meet Our Team
                                </li>
                            </a>
                            <a href="{{ route('index') }}">
                                <li>
                                    <i class="fas fa-angle-double-right"></i>Home
                                </li>
                            </a>
                            <a href="{{ route('login') }}">
                                <li>
                                    <i class="fas fa-angle-double-right"></i>Admin Login
                                </li>
                            </a>
                        </ol>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="_kl_de_w">
                        <h3>NewsLetter</h3>
                        <p></p>
                        @if (Session::has('flash_success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            {!! Session::get('flash_success') !!}
                        </div>
                        @endif
                        <form class="my-form" action="{{ route('quickEnquiry') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input class="form-control" type="emal" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="_kl_de_w">
                        {{-- <h3>Services</h3>
                        <ol>
                            <li><i class="far fa-angle-right"></i>Raise fund for healthy food</li>
                            <li><i class="far fa-angle-right"></i>Education for poor children</li>
                            <li><i class="far fa-angle-right"></i>Promoting the rights of children</li>
                            <li><i class="far fa-angle-right"></i>Massive donation to poor</li>
                            <li class="last"><i class="far fa-angle-right"></i>Huge help to homeless pupil</li>
                        </ol> --}}
                        {{-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.990393692634!2d85.31438031506165!3d27.686691782800462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b4668fe645%3A0xe924ef110b00afcb!2sPeace%20Nepal%20DOT%20Com%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1622347595121!5m2!1sen!2snp"
                            width="350" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
                        {{-- <div class="col-lg-4 col-md-6 col-12"> --}}
                            <div class="fb-page" data-href="https://www.facebook.com/youthinfederaldiscourse"
                                data-tabs="timeline" data-width="1000" data-height="280" data-small-header="true"
                                data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/youthinfederaldiscourse"
                                    class="fb-xfbml-parse-ignore"><a
                                        href="https://www.facebook.com/youthinfederaldiscourse">Youth in Federal
                                        Discourse</a></blockquote>
                            </div>
                            {{--
                        </div> --}}
                    </div>
                </div>

                <div class="col-12">
                    <div class="copy-right">
                        <span style="float: left; color: rgb(184, 174, 174);">© 2021 All Rights Reserved by YFD </span>
                        <span style="float: right; color: rgb(177, 168, 168);">
                            <\> with ❤️ by Prabhu
                        </span>

                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0"
    nonce="lpswDjOc"></script>

<script src="{{ asset('/frontend/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('/frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/frontend/js/script.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

{{-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script> --}}

<script>
    $(function() {
        $('#basicExampleModal').modal('show');
    });

    $(document).ready(function() {
        $('.counter-value').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 3500,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    });

    $(document).ready(function() {
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
</script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

</html>