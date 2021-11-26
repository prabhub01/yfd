@extends('layout.frontend')
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
                    <li class="breadcrumb-item active" aria-current="page">Donate</li>
                </ol>
            </nav>
        </div>
    </div>
<section class="se-001">
<div class="container">
    <div class="row">
            {{-- <p style="text-align: justify; margin: 0px 20px 0px 20px;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui commodi placeat mollitia repellendus, fugit, pariatur nisi non numquam voluptatum exercitationem labore eaque. Suscipit modi laboriosam culpa consequuntur autem ipsam quidem.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui commodi placeat mollitia repellendus, fugit, pariatur nisi non numquam voluptatum exercitationem labore eaque. Suscipit modi laboriosam culpa consequuntur autem ipsam quidem.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui commodi placeat mollitia repellendus, fugit, pariatur nisi non numquam voluptatum exercitationem labore eaque. Suscipit modi laboriosam culpa consequuntur autem ipsam quidem.
            </p> --}}

    </div>
</div>
</section>
<section class="se-001">
    <div class="card text-center">
        <div class="card-header">
         Bank Details
        </div>
        <div class="card-body">
          <h5 class="card-title">NIC ASIA BANK LTD</h5>
          <p class="card-text">Account Number: 07875526980002</p>
          <p class="card-text">A/C Holder Name: Prajwol Bikram Rana </p>
          <p class="card-text">Branch : New Road</p>
        </div>
        {{-- <div class="card-footer text-muted">
          2 days ago
        </div> --}}
      </div>

      <div class="card text-center">
        <div class="card-header">
        Digital Transfer
        </div>
        <div class="card-body">
            <span>
                <img src=" {{ asset('img/donation/esewa.png') }} " alt="" height="40px" width="100px"> <br>
                <p class="card-text">Phone Number: 9841526598</p>
                <p class="card-text">A/C Holder Name: Prajwol Bikram Rana </p>
            </span>
        </div>
        <div class="card-body">
            <span>
                <img src=" {{ asset('img/donation/khalti.png') }} " alt="" height="40px" width="100px"> <br>
                <p class="card-text">Phone Number: 9841526598</p>
                <p class="card-text">A/C Holder Name: Prajwol Bikram Rana </p>
            </span>
        </div>
      </div>
</section>

<section class="se-001">
    <div class="container">
        <div class="row">
             <h2 style="margin: 0px auto; padding-bottom: 20px;">Let's Stay In Touch</h2>
        </div>
            <p style="text-align: center"> <span class="fb-like" data-href="https://www.facebook.com/youthinfederaldiscourse" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></span></p>
    </div>
    </section>
@endsection
