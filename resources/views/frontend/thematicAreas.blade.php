@extends('layout.frontend')
@section('title', 'Thematic Areas')
@section('desc', 'Thematic Areas')
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
                    <li class="breadcrumb-item active" aria-current="page">Thematic Areas</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="se-001">
        <div class="container">
            <div class="row" style="padding:0px 10px 0px 10px;">
                <span style="margin-bottom: 30px;">Our activities, though numerous, can be broadly be classified into 3
                    major themes:</span>
                <h3 style="margin-bottom: 10px;">Promoting Legal and Political Awareness and Discourses</h3>
                <div style="width: 45%; float: left; text-align: justify; padding-right:3rem;">
                    <strong>Promoting Knowledge Synthesis: </strong> In today’s increasingly sophisticated world where
                    the rate of sophistication is proliferating, being attuned to these changes is vital. This means
                    policymakers should be aware of these looming changes and should proactively come up with policy
                    solutions.
                    For this very reason, YFD envisions a platform to promote evidence-based policymaking, research and
                    advocacy culture among the youths. With this we have focused our work on conducting research,
                    generating evidence for policy-making, advocacy and eventually publishing journals, reports, policy
                    briefs, and infographics. Besides conducting research, the think-tank initiative is envisioned for
                    establishing YFD as a watchdog to provide analysis and recommendations to politicians, policymakers,
                    researchers, and civil society organizations.
                </div>
                <div style="width: 55%; float: right; text-align: justify;">
                    <strong> Promoting Knowledge dissemination and discourse: </strong> The creation of knowledge is
                    just the initial step towards keeping up with the time as the citizenry needs to be aware of these
                    impending changes and the challenges that accompany them.
                    Thus, facilitating the diffusion of knowledge is the next obvious and vital responsibility we strive
                    to shoulder. We promote Knowledge of Legal issues and political situations primarily through our
                    Discussion series where experts/politicians pertaining to various legal and political matters are
                    invited to share their views as guests. Similarly, we have Blogs where our members regularly publish
                    their views on legal, social and political issues. Podcast Likewise, our pre-prepared, pre-scripted
                    podcasts strive to diffuse information on critical issues in easily digestible form.
                    Likewise, in parliamentary simulations, a core part of our events, we strive to follow all aspects
                    of parliamentary producers including discussions, policy reviews and so on. Discussion of a wide
                    range of policy issues ranging from creating special economic zones, infectious disease control
                    protocols, education sector reform to marijuana legalisation is held.
                    Thus, we conduct these programs, along with others like debates, reading club thesis presentations,
                    etc. through collaborations with various educational institutions. Such programs along with others
                    enable us to implant and promote discourses, especially among youths who will form the backbone of
                    civil society in the long term.

                </div>
            </div>

            <div class="row" style="margin-top: 20px; padding:0px 10px 0px 10px;">
                <h3 style="width: 100%;">Youth Empowerment</h3>
                <span style="margin-bottom: 20px;">YFD, being a youth-run and youth-led organisation, places tremendous
                    focus on youth empowerment.
                </span>
                <div style="width: 45%; float: left; text-align: justify; padding-right:3rem;">
                    <strong> Leadership opportunities:</strong> We want youths, immersed in policy discussions in our
                    platform, to be capable of taking leading roles, in high offices and civil societies, where they can
                    have a significant impact on policies.
                    Therefore, we provide youths with the opportunities to lead by enabling them to climb up the
                    organisational ladder based on merit. Even without necessarily taking a leading position they can
                    still lead from, as they’ll have the option of choosing to lead, manage, supervise various of our
                    programs including but not limited to discussion series, Parliamentary discussion Simulation (MPA).
                    They can freely take initiative to start/organize new programs under their leadership as well.


                </div>
                <div style="width: 55%; float: right; text-align: justify;">
                    <strong> Personal Growth:</strong> Not only do we want our members, equipped with novel ideas, to be
                    capable of leading but capable of reaching those positions of leadership in the first place. Hence,
                    personal growth and proliferation of soft skills of our members, which would aid them in their
                    endeavours to reach higher in future, is a matter of utmost importance.

                    Since there are multiple roles within the organisation without necessarily being in charge of
                    looking after communications, creating proposals, securing fundings, connecting with special guests
                    etc, this provides our participants to work on a wide range of soft skills.

                    More prominently, through activities like Debates, Parliamentary simulations, Discussion series,
                    Reading club, Blog writing, Podcasts etc., we provide ample opportunities for youths to improve
                    their critical thinking, expand their knowledge, gain exposure to important contemporary discourses,
                    demonstrate their knowledge and insights etc.


                </div>
            </div>

            <div class="row" style="margin-top: 20px; padding:0px 10px 0px 10px;">
                <h3 style="width: 100%;">Progressive Community building</h3>
                <span style="margin-bottom: 20px; text-align: justify;">
                    In addition to propagating political and legal discourses, we seek to create communities of
                    individuals committed to bringing about changes based on those views. Bringing about positive change
                    is a collective endeavour, requiring proper organisation, coordination between leaders of various
                    causes, sustained political movements and other cooperative efforts. So we believe building a
                    progressive community is the other vital foundation for a society to lurch forward. This is done
                    through civic engagement directly through our organisation or in collaboration with other
                    organisations.
                </span>
                <div style="width: 45%; float: left; text-align: justify; padding-right:3rem;">
                    <strong> YFD’s own civic engagement: </strong> We put a great deal of effort into recruiting our
                    members as well.
                    Members are selected after a rigorous selection process to evaluate their conscientiousness,
                    character, willingness to contribute to our causes and so on. Thus our platform itself serves as a
                    community for such youths. Those youths, through various aforementioned events, and events they
                    initiate themselves further strive to increase this community
                </div>
                <div style="width: 55%; float: right; text-align: justify;">
                    <strong> Civic engagement and community building through collaborations: </strong> To make our
                    engagement far-reaching,
                    we collaborate with various educational institutions, local communities and even other organisations
                    through collaborative joint events. We organise various inter-college and intra-college
                    competitions, open competitions, training etc in collaboration with these organisations. Through
                    these regular activities, we hope to foster communities of like-minded people within these
                    independent organisations as well, who share our vision.
                </div>
                <span style="margin-top: 20px;">Through these works, we seek to contribute to strengthening belief in
                    constitution and progressive
                    policies in Nepal in the long term. </span>
            </div>
        </div>
    </section>
</section>
@endsection