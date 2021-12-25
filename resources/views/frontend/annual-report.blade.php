@extends('layout.frontend')
@section('title', 'Annual Reports')
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
                    <li class="breadcrumb-item active" aria-current="page">Annual Report</li>
                </ol>
            </nav>
        </div>
    </div>
    <section class="se-001" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <h5 style="padding-bottom: 20px; margin-top: 10px;">Download our Annual Reports</h5>
            </div>


            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Date</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($data) && !$data->isEmpty())
                    @foreach ($data as $key => $agmReports)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{$agmReports->title}}</td>
                        <td>{{$agmReports->date}}</td>
                        <td>
                            <a href="{{ asset('uploads/agm-report/' . $agmReports->file) }}" download>
                                <button class="btn btn-primary"><i class="fas fa-download"></i> Download</button></a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="5"> No Record(s) Found.</td>
                    </tr>
                    @endif
                </tbody>
            </table>

        </div>
    </section>
    @endsection