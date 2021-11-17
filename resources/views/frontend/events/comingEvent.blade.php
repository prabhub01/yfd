@extends('layout.frontend')
@section('content')
<section class="bg-banner">
    <img src="{{ asset('storage/banner/'.'hill1.jpg') }}" alt="" height="250px" width="100%">
</section>
<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: #f2f7f8;">
                <li class="breadcrumb-item"><a href="#"> <i class="fas fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Upcoming Events</li>
            </ol>
        </nav>
    </div>
</div>
    <section>
        <div class="container">
            <div class="row" style="height: 500px;">
                <p style="margin: 0px auto; margin-top: 30px;">
                    We don't have any upcoming events. Please visit us back for more update.
                </p>
            </div>
        </div>
    </section>
@endsection
