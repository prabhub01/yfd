@extends('layout.backend')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">About Us | Management</h1>

        </div>

        <div class="row" style="background-color: #fff; padding: 20px; border-radius:20px;">
            <form method="post" action="{{ route('admin.about-us.update') }}" accept-charset="UTF-8"
                class="form-horizontal" enctype="multipart/form-data" style="width: 100%;">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="card card-custom gutter-b">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div id="aa-1" class="tab-pane fade in active show">
                                        <div class="form-group"> <label class="control-label">Description <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-group"> <textarea class="ckeditor form-control"
                                                    name="description"> {{ $data->description }}</textarea> </div>
                                        </div>
                                        <div class="form-group"> <label class="control-label">Our Story <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-group"> <textarea class="ckeditor form-control"
                                                    name="our_story_desc">{{ $data->our_story_desc }}</textarea> </div>
                                        </div>
                                        <div class="form-group"> <label class="control-label">Our Mission <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-group"> <textarea class="ckeditor form-control"
                                                    name="our_mission_desc">{{ $data->our_mission_desc }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group"> <label class="control-label">Our Vision <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-group"> <textarea class="ckeditor form-control"
                                                    name="our_vision_desc">{{ $data->our_vision_desc }}</textarea> </div>
                                        </div>
                                        <div class="form-group"> <label class="control-label">Our Objectives <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-group"> <textarea class="ckeditor form-control"
                                                    name="our_objectives_desc">{{ $data->our_objectives_desc }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group"> <label class="control-label">Statement of
                                                Non-Descrimination <span class="text-danger">*</span></label>
                                            <div class="form-group"> <textarea class="ckeditor form-control"
                                                    name="statement_of_non_descrimination">{{ $data->statement_of_non_descrimination }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group"> <label class="control-label">Disclaimer <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-group"> <textarea class="ckeditor form-control"
                                                    name="disclaimer">{{ $data->disclaimer }}</textarea> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card card-custom gutter-b">
                            <div class="card-body">
                                <div class="form-group"> <label class="control-label">Banner </label> <span
                                        class="text-muted float-right small">Preferred size: 1024x280px</span>
                                    <div class="custom-file"> <input type="file" name="banner"
                                            accept="image/png, image/jpeg"> </div>

                                    @if (file_exists('uploads/about-us/banner/' . $data->banner) && !empty($data->banner))
                                        <div class="imageContainer"> <img
                                                src="/uploads/about-us/banner/{{ $data->banner }}" alt="No Image Found"
                                                srcset="" width="100%" height="100%">
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group"> <label class="control-label">Our Story </label> <span
                                        class="text-muted float-right small">Preferred size: 740x500px</span>
                                    <div class="custom-file"> <input type="file" name="our_story_img"
                                            accept="image/png, image/jpeg"> </div>
                                            @if (file_exists('uploads/about-us/our-story/' . $data->our_story_img) && !empty($data->our_story_img))
                                            <div class="imageContainer"> <img
                                                    src="/uploads/about-us/our-story/{{ $data->our_story_img }}" alt="No Image Found"
                                                    srcset="" width="100%" height="100%">
                                            </div>
                                        @endif
                                </div>
                                <div class="form-group"> <label class="control-label">Our Mission </label> <span
                                        class="text-muted float-right small">Preferred size: 1250x440px</span>
                                    <div class="custom-file"> <input type="file" name="our_mission_img"
                                            accept="image/png, image/jpeg"> </div>
                                            @if (file_exists('uploads/about-us/our-mission/' . $data->our_mission_img) && !empty($data->our_mission_img))
                                            <div class="imageContainer"> <img
                                                    src="/uploads/about-us/our-mission/{{ $data->our_mission_img }}" alt="No Image Found"
                                                    srcset="" width="100%" height="100%">
                                            </div>
                                        @endif
                                </div>
                                <div class="form-group"> <label class="control-label">Our Vision </label> <span
                                        class="text-muted float-right small">Preferred size: 1250x440px</span>
                                    <div class="custom-file"> <input type="file" name="our_vision_img"
                                            accept="image/png, image/jpeg"> </div>
                                            @if (file_exists('uploads/about-us/our-vision/' . $data->our_vision_img) && !empty($data->our_vision_img))
                                            <div class="imageContainer"> <img
                                                    src="/uploads/about-us/our-vision/{{ $data->our_vision_img }}" alt="No Image Found"
                                                    srcset="" width="100%" height="100%">
                                            </div>
                                        @endif
                                </div>
                                <div class="form-group"> <label class="control-label">Our Objectives </label> <span
                                        class="text-muted float-right small">Preferred size: 500x330px</span>
                                    <div class="custom-file"> <input type="file" name="our_objectives_img"
                                            accept="image/png, image/jpeg"> </div>
                                            @if (file_exists('uploads/about-us/our-objectives/' . $data->our_objectives_img) && !empty($data->our_objectives_img))
                                            <div class="imageContainer"> <img
                                                    src="/uploads/about-us/our-objectives/{{ $data->our_objectives_img }}" alt="No Image Found"
                                                    srcset="" width="100%" height="100%">
                                            </div>
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin:0 0 1rem 1rem;"> <button type="submit" class="btn btn-primary">Submit</button> </div>
                </div>
            </form>
        </div>
    </div>
@endsection
