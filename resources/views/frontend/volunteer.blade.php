@extends('layout.frontend')
@section('content')
    <section class="bg-banner">
        <img src="{{ url('/storage/banner/hill.jpg') }}" alt="Image Not Found" height="250px" width="100%">
    </section>

    <section class="se-001">
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background-color: #f2f7f8;">
                        <li class="breadcrumb-item"><a href="#"> <i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Volunteer</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <p style="text-align: justify; margin: 0px 20px 0px 20px;">
                    Volunteering with us does not require long-term dedication, commitment or time investment. If your
                    schedule does not allow you to apply for the
                    membership, volunteering is the best way to join us.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-01-1a">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="_Ol_er_qw" style="margin-bottom: 20px;">
                        <p>
                        <h3 class="title_h3" style="text-align: center; padding-top: 20px;">Why Volunteer with us?
                        </h3>
                        </p> <br>
                        <i class="fas fa-arrow-circle-right"></i> <span>Expand your network with people from diverse
                            backgrounds yet similar interests and to maintain good relation with them.</span> <br>
                        <i class="fas fa-arrow-circle-right"></i> <span>Gain abundant knowledge and valuable experience from
                            active engagements in our programs and projects.</span> <br>
                        <i class="fas fa-arrow-circle-right"></i> <span>Improve professionalism and teamwork
                            abilities.</span> <br>
                        <i class="fas fa-arrow-circle-right"></i> <span>Advance transferable skills (social skills,
                            communication skills, time management skills, leadership skills) working alongside other
                            people.</span> <br>
                        <i class="fas fa-arrow-circle-right"></i> <span>Create a positive impression to pave your way in
                            becoming a General member of our organization. </span> <br>
                        <i class="fas fa-arrow-circle-right"></i> <span>Volunteers are valued and are treated as a part of
                            the team. Certificates are provided for their contributions. </span> <br>
                        <i class="fas fa-arrow-circle-right"></i> <span>Our future opportunities and priorities are set on
                            Volunteers. Hence, they have a great advantage. </span> <br>
                        <i class="fas fa-arrow-circle-right"></i> <span>Volunteers receive close and effective supervision,
                            guidance, and support from the members throughout and even beyond their time with us. </span>
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="_Ol_er_qw">
                        <p>
                        <h4 class="title_h3" style="text-align: center;">
                            Please fill out the form to become a volunteer</h4>
                        </p> <br>
                    </div>
                </div>
                <section
                    style="width: 80%; margin:0px auto; padding: 50px; background-color: #fff; border-radius: 20px; margin-bottom: 20px;">

                    @if (Session::has('flash_success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Success!</strong> {!! Session::get('flash_success') !!}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger" >
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    @include('sweetalert::alert')

                    <form action="{{ route('volunteer.store') }}" target="" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault01">Full name *</label>
                                <input type="text" name="full_name" class="form-control" id="validationDefault01"
                                    placeholder="" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault02">Email *</label>
                                <input type="email" name="email" class="form-control" id="validationDefault02"
                                    placeholder="" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationDefault002">Primary Contact Number*</label>
                                <input type="number" name="primary_contact" class="form-control" id="validationDefault002"
                                    placeholder="" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault03">Secondary Contact Number</label>
                                <input type="number" name="secondary_contact" class="form-control"
                                    id="validationDefault03" placeholder="">
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="validationDefault04">Subject *</label>
                                <input type="text" name="subject" class="form-control" id="validationDefault04"
                                    placeholder="" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationDefault05">Duration *</label>
                                <select name="duration" class="form-control" id="validationDefault05" required>
                                    <option value="1 month">Upto 1 Month</option>
                                    <option value="3 months">Upto 3 Months</option>
                                    <option value="6 months">Upto 6 Months</option>
                                    <option value="1 year">Upto 1 Year</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-12">
                                <label for="validationDefault04">Why you want to Join Us ? *</label>
                                <textarea name="reason" id="validationDefault04" class="form-control" cols="30"
                                    rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                <label class="form-check-label" for="invalidCheck2">
                                <a href="#" data-toggle="modal" data-target="#modalT&C"> Agree to terms and conditions. </a>
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
                </section>
            </div>
        </div>
        <!-- Modal -->
<div class="modal fade" id="modalT&C" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Terms & Conditions</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

            Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

            Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

            Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

            Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

            Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

            Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

            Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

            Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

            Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

            Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

            Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

            Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

            Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

            Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

            Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

            Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

            Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>
    </section>
@endsection
