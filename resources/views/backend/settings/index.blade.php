@extends('layout.backend')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Settings | Management</h1>
        {{-- <a href="{{ route('admin.podcast.create') }}"
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            Create New</a> --}}
    </div>

    {{-- <div class="row" style="background-color: #fff; padding: 20px; border-radius:20px;"> --}}

        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="contact-tab" data-toggle="pill" href="#contact" role="tab"
                        aria-controls="v-pills-home" aria-selected="true">Contact</a>
                    <a class="nav-link" id="joinUs-tab" data-toggle="pill" href="#joinUs" role="tab"
                        aria-controls="v-pills-home" aria-selected="false">Join Us</a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    {{-- for contact --}}
                    <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <form method="post" action="{{ route('admin.contact.update', 1) }}" accept-charset="UTF-8"
                            class="form-horizontal" enctype="multipart/form-data" style="width: 100%;">
                            @csrf
                            <div class="col-12">
                                <div class="card card-custom gutter-b">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="control-label">Location</label>
                                            <span class="text-danger">*</span>
                                            <div class="custom-file">
                                                <input class="form-control" name="location" type="text"
                                                    value="{{$data->location}}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Contact</label>
                                            <span class="text-danger">*</span>
                                            <div class="custom-file">
                                                <input class="form-control" placeholder="" name="contact" type="text"
                                                    value="{{$data->contact}}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <span class="text-danger">*</span>
                                            <div class="custom-file">
                                                <input class="form-control" placeholder="" name="email" type="email"
                                                    value="{{$data->email}}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Google Map Link</label>
                                            <span class="text-danger">*</span>
                                            <div class="custom-file">
                                                {{-- <input class="form-control" name="google_map" type="text" value={{
                                                    $data->google_map }}> --}}
                                                <textarea name="google_map" id="" rows="10"
                                                    style="width: 100%;">{{$data->google_map}} </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin:1rem 0 1rem 1rem;">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>


                    {{-- for joinus --}}
                    <div class="tab-pane fade" id="joinUs" role="tabpanel" aria-labelledby="joinUs-tab">
                        <div class="col-12">
                            <div class="card card-custom gutter-b">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="control-label">Link to Membership Form</label>
                                        <span class="text-danger">*</span>
                                        <div class="custom-file">
                                            <input class="form-control" name="location" type="text" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{--
    </div> --}}


</div>



@endsection