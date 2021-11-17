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
                        <li class="breadcrumb-item active" aria-current="page">Partner With Us</li>
                    </ol>
                </nav>
            </div>
        </div>

        <section class="se-001">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <p style="text-align: justify; margin: 0px 20px 0px 20px;">
                            Youth in Federal Discourse cordially invites not for profit NGOs, corporate houses and
                            government
                            bodies to collaborate and work with us through partnerships. We are open for both the long
                            term partnership through MOU, and event based collaboration through Even partnership contract.
                            Looking back to our journey, we have collaborated and worked in coordination with ten
                            different not for profit organizations.
                            Through the process of collaboration, we have consistently been growing our team, skills and
                            knowledge. We can assure a quality partnership as we assure the rights, interests and
                            development of each party and protection of Intellectual Property, confidentiality of each party
                            to
                            the partnership.
                            We are always looking forward to partners who can work in coordination with us to promote each
                            other’s objectives and mission. Do not hesitate to reach out to our team. Our hands will
                            always be welcoming you.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="se-001" style="background-color: #fff;">
            <div class="container">
                <h2 style="text-align: center; margin-top:10px;">Why Partner With Us</h2>
                <div class="row">
                    <div class="card col-lg-4 col-md-4 col-6" style="border: none;">
                        <span style="text-align: center; color: #2393c0;"><i class="far fa-check-circle fa-6x"></i> </span>
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">Create Impact</h5>
                            <p class="card-text" style="text-align: justify;">Working with our team will create better
                                platforms to co-develop programs and events coherent with your organizational goals and
                                values ultimately developing better support for youth empowerment and acknowledgment in the
                                field of governance.</p>
                        </div>
                    </div>

                    <div class="card col-lg-4 col-md-4 col-6" style="border: none;">
                        <span style="text-align: center; color: #2393c0;"> <i class="fas fa-users fa-6x"></i>
                        </span>
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">Reach a largerr audience</h5>
                            <p class="card-text" style="text-align: justify;">With our broad spectrum of partnerships
                                and networks, you will be introduced to new audiences, expanding your coverage. In hand, you
                                will be able to pitch your working areas and strategies to develop corporate houses and
                                government bodies amplifying your partnerships. </p>
                        </div>
                    </div>

                    <div class="card col-lg-4 col-md-4 col-6" style="border: none;">
                        <span style="text-align: center; color: #2393c0;"> <i class="far fa-handshake fa-6x"></i> </span>
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">Enhance your Profile</h5>
                            <p class="card-text" style="text-align: justify;">Our values of integrity, mutuality,
                                creativity, and professionalism will certainly enhance your profile, expand your working
                                area and story through several formal and informal opportunities, and strengthen your
                                networking with leading experts, specialists, and supporters.</p>
                        </div>
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
                            <h2>Become a Partner</h2>
                            </p>
                            <p style="text-align: justify;">
                                YFD offers year-long strategic partnerships. This goes beyond organizing a simple event. Our
                                main objective for opening the scope of this partnership is to provide the space to your
                                organization within our networks and open up the doors to our audiences for more platforms.
                                Do you want to become one of your year-long partners? Let’s discuss how working together
                                will benefit our organizations.

                                <br>
                            </p> <br>
                            <p style="text-align: center;">
                                <a href="{{ route('contact-us') }}"> <button type="button" class="btn btn-primary"
                                        style="text-align: center;">Partner with
                                        us</button> </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="_Ol_er_qw yu">
                            <img src="{{ asset('img/partners/become_partner.jpeg') }}" style="border-radius: 50%;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" style="margin-top: 10px;">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="_Ol_er_qw yu">
                            <img src="{{ asset('img/partners/sponsor.jpg') }}" style="border-radius: 50%;">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12" style="margin-top: 50px;">
                        <div class="_Ol_er_qw">
                            <p>
                            <h2>Become a Sponsor</h2>
                            </p>
                            <p style="text-align: justify;">
                                YFD has been able to develop some permanent audiences and followers who strongly believe in
                                our values and objectives. Becoming a sponsor as per your field of interest will provide
                                quick visibility to your organization within our established audience.
                                Do you want your organization to gain quick visibility in front of our established audiences
                                and networks ? Let’s discuss what area would be the best for you.

                            </p> <br>
                            <p style="text-align: center;">
                                <a href="{{ route('contact-us') }}"> <button type="button" class="btn btn-primary"
                                        style="text-align: center;">Become a Sponsor</button> </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" style="margin-top: 10px;">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="_Ol_er_qw">
                            <p>
                            <h2>Collaborate</h2>
                            </p>
                            <p style="text-align: justify;">
                                YFD believes to reach its objectives through strong collaboration on its multiple events and
                                programs. Depending upon the nature of the program and event, your exposure and pitch to
                                diversified areas will enhance your dynamic figure to a larger extent.
                                Do you want to develop a more dynamic experience? Let’s discuss which event or program would
                                fit your objective.

                            </p><br>
                            <p style="text-align: center;">
                                <button type="button" class="btn btn-primary" style="text-align: center;">Collaborate With
                                    Us</button>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="_Ol_er_qw yu">
                            <img src="{{ asset('img/partners/collaborate.png') }}" style="border-radius: 50%;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
