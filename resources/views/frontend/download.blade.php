@extends('layout.frontend')
@section('title', 'Downloads')
@section('desc', 'Click to download')
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
                    <li class="breadcrumb-item active" aria-current="page">Downloads</li>
                </ol>
            </nav>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background-color: #f2f7f8;">
                        <li class="breadcrumb-item"><a href="#"> <i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Downloads</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 padding-right" style="float: left;">
                    <h3>Downloads</h3>
                    <table class="table table-bordered cus">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>First AGM Report</td>
                                <td>November 18, 2020</td>
                                <td>
                                    <button type="button" class="btn btn-outline-secondary btn-arrow">Download <i
                                            class="fas fa-download"></i> </button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">2</th>
                                <td>First AGM Report</td>
                                <td>January 5, 2020</td>
                                <td>
                                    <button type="button" class="btn btn-outline-secondary btn-arrow">Download <i
                                            class="fas fa-download"></i> </button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">3</th>
                                <td>First AGM Report</td>
                                <td>December 9, 2020</td>
                                <td>
                                    <button type="button" class="btn btn-outline-secondary btn-arrow">Download <i
                                            class="fas fa-download"></i> </button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">4</th>
                                <td>First AGM Report</td>
                                <td>March 26, 2020</td>
                                <td>
                                    <button type="button" class="btn btn-outline-secondary btn-arrow">Download <i
                                            class="fas fa-download"></i> </button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">5</th>
                                <td>First AGM Report</td>
                                <td>April 15, 2020</td>
                                <td>
                                    <button type="button" class="btn btn-outline-secondary btn-arrow">Download <i
                                            class="fas fa-download"></i> </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-3 sidebar" style="float: right;">
                    <p style="text-align: center; font-size: 18px;">Categories</p>
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush gp">
                            <li class="list-group-item"><a href=""> A First item </a></li>
                            <li class="list-group-item"><a href=""> A Second item </a></li>
                            <li class="list-group-item"><a href=""> A third item </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
