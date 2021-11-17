@extends('layout.frontend')
@section('content')
    <section class="bg-banner">
        <img src="{{ asset('storage/banner/' . 'hill1.jpg') }}" alt="" height="250px" width="100%">
    </section>
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color: #f2f7f8;">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}"> <i class="fas fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Past Events</li>
                </ol>
            </nav>
        </div>
    </div>

    <section>
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <div class="ribbon-wrapper">
                                <div class="ribbon" style="color: darkslategrey;">Past</div>
                            </div>
                            <img class="card-img-top" src="{{ asset('img/sample/2.jpg') }}" alt=""
                                style="height: 200px;">
                            <div class="card-body">
                                <a href="{{ route('/event-details/ksl-mpa-2019') }}">
                                    <h6 class="card-text">KSL MPA, 2019 </h6>
                                </a>
                                <p style="text-align: justify; font-size: 14px; margin-top: 5px;">Model Provincial Assembly
                                    (MPA) was organized in collaboration with Kathmandu School of
                                    Law on 3rd of Asoj, 2076 on the special occasion of Constitution Day. MPA was a mock of
                                    Provincial Assembly of Province Number 3, where the bill on Special Economic Zone was
                                    proposed to and finally passed by the whole Assembly.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <div style="float: left;">
                                            <small style="color: tomato;">
                                                <i class="far fa-calendar-alt"></i>
                                                January 15, 2021 &nbsp;
                                                <i class="fas fa-map-marker-alt"></i>
                                                Kathmandu
                                            </small>
                                        </div>
                                        {{-- <button type="button" class="btn btn-sm btn-primary" style="text-align: right;">View</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <div class="ribbon-wrapper">
                                <div class="ribbon" style="color: darkslategrey;">Past</div>
                            </div>
                            <img class="card-img-top" src="{{ asset('img/sample/2.jpg') }}" alt=""
                                style="height: 200px;">
                            <div class="card-body">
                                <a href="{{ route('/event-details/medical-mpa-2020') }}">
                                    <h6 class="card-text">Medical MPA, 2020 </h6>
                                </a>
                                <p style="text-align: justify; font-size: 14px; margin-top: 5px;">Medical Model Provincial
                                    Assembly (MPA) 2020 was organized in collaboration with Nepal Health Corps (NHC) with
                                    the main aim to get the medical students acquainted with the procedures of provincial
                                    assembly. The program was a simulation of the Provincial Assembly of Bagmati Province.
                                    Due to the large number of interested participants
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <div style="float: left;">
                                            <small style="color: tomato;">
                                                <i class="far fa-calendar-alt"></i>
                                                January 15, 2021 &nbsp;
                                                <i class="fas fa-map-marker-alt"></i>
                                                Kathmandu
                                            </small>
                                        </div>
                                        {{-- <button type="button" class="btn btn-sm btn-primary" style="text-align: right;">View</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <div class="ribbon-wrapper">
                                <div class="ribbon" style="color: darkslategrey;">Past</div>
                            </div>
                            <img class="card-img-top" src="{{ asset('img/sample/2.jpg') }}" alt=""
                                style="height: 200px;">
                            <div class="card-body">
                                <a href="{{ route('/event-details/kanun-bimarsha') }}">
                                    <h6 class="card-text">Kanun Bimarsha: Comment on the Infectious Disease Act, 2020
                                        (1964) </h6>
                                </a>
                                <p style="text-align: justify; font-size: 14px; margin-top: 5px;">'Kanun Bimarsha' is one of
                                    the prominent programs of YFD where the comments for necessary amendments on different
                                    Acts are collected from youths and compiled together as a report ultimately submitted to
                                    concerned authority upon their call.
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <div style="float: left;">
                                            <small style="color: tomato;">
                                                <i class="far fa-calendar-alt"></i>
                                                January 15, 2021 &nbsp;
                                                <i class="fas fa-map-marker-alt"></i>
                                                Kathmandu
                                            </small>
                                        </div>
                                        {{-- <button type="button" class="btn btn-sm btn-primary" style="text-align: right;">View</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            {{-- <div class="ribbon-wrapper">
                                <div class="ribbon" style="color: darkslategrey;">Past</div>
                            </div> --}}
                            <img class="card-img-top" src="{{ asset('img/sample/2.jpg') }}" alt=""
                                style="height: 200px;">
                            <div class="card-body">
                                <a href="{{ route('/event-details/virtualParliamentary') }}">
                                    <h6 class="card-text">Virtual Parliamentary Committee Simulation and Report
                                        Submission:
                                        Marijuana Farming Management Bill
                                    </h6>
                                </a>
                                <p style="text-align: justify; font-size: 14px; margin-top: 5px;">Virtual parliamentary
                                    committee simulation and report submission on Marijuana Farming Management Bill was
                                    organized with active participation of youths from different fields, more specifically
                                    from law, medicine, and .....
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <div style="float: left;">
                                            <small style="color: tomato;">
                                                <i class="far fa-calendar-alt"></i>
                                                January 15, 2021 &nbsp;
                                                <i class="fas fa-map-marker-alt"></i>
                                                Kathmandu
                                            </small>
                                        </div>
                                        {{-- <button type="button" class="btn btn-sm btn-primary" style="text-align: right;">View</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">

                            <img class="card-img-top" src="{{ asset('img/sample/2.jpg') }}" alt=""
                                style="height: 200px;">
                            <div class="card-body">
                                <a href="{{ route('/event-details/rotaract') }}">
                                    <h6 class="card-text">ROTARACT MODEL PROVINCIAL ASSEMBLY, 2020
                                    </h6>
                                </a>
                                <p style="text-align: justify; font-size: 14px; margin-top: 5px;">Rotaract Model Provincial
                                    Assembly was organized in collaboration with Rotaract Tripureswor where the 'Tax and
                                    Non-tax Revenue Mobilization' Bill was discussed within the Assembly. The whole event
                                    was divided into Workshop and Simulation. During the discussion, participants rigorously
                                    discussed different issues of the bill and ....
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <div style="float: left;">
                                            <small style="color: tomato;">
                                                <i class="far fa-calendar-alt"></i>
                                                January 15, 2021 &nbsp;
                                                <i class="fas fa-map-marker-alt"></i>
                                                Kathmandu
                                            </small>
                                        </div>
                                        {{-- <button type="button" class="btn btn-sm btn-primary" style="text-align: right;">View</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </section>
@endsection
