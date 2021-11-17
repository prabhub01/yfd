@extends('layout.backend')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Team | Edit</h1>
            <a href="{{ route('admin.team.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                Back</a>
        </div>

        <div class="row" style="background-color: #fff; padding: 20px; border-radius:20px;">
            <form method="post" action="{{ route('admin.team.update', $details->id) }}" accept-charset="UTF-8"
                class="form-horizontal" enctype="multipart/form-data" style="width: 100%;">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="card card-custom gutter-b">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div id="aa-1" class="tab-pane fade in active show">
                                        <div class="form-group">
                                            <div class="checkbox-inline">
                                                <label class="checkbox checkbox-lg">
                                                    <input type="checkbox" name="is_active" value="1" checked="checked">
                                                    <span></span>Publish ?</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Full name <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" placeholder="Full name" name="full_name"
                                                type="text" value="{{ $details->full_name }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Designation <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" placeholder="Designation" name="designation"
                                                type="text" value="{{ $details->designation }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Description <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control" name="description" id="" cols="30"
                                                rows="10">{{ $details->description }}</textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card card-custom gutter-b">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="control-label">Photo <span
                                            class="text-danger">*</span></label></label>
                                    <span class="text-muted float-right small">Preferred size: 140x160px</span>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="photo" id="image-file">
                                        <label class="custom-file-label selected" for="image-file"></label>
                                    </div>
                                    <br> <br>
                                    @if(file_exists('uploads/team/'.$details->photo) && !empty($details->photo))
                                        <img src="uploads/team/{{ $details->photo }}" alt="Not found" srcset=""> <br><br>
                                        <a href="{{ route('admin.team.destroyImage', $details->id) }}"> <i
                                                class="fas fa-trash-alt" title="Delete this image"></i> </a>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Email<span
                                        class="text-danger">*</span></label></label>
                                    <div class="custom-file">
                                        <input class="form-control" placeholder="" name="email" type="email"
                                            value="{{ $details->email }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Linkedin Link</label>
                                    <div class="custom-file">
                                        <input class="form-control" placeholder="" name="linkedin_link" type="text"
                                            value="{{ $details->linkedin_link }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Insta Link</label>
                                    <div class="custom-file">
                                        <input class="form-control" placeholder="" name="insta_link" type="text"
                                            value="{{ $details->insta_link }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Facebook Link</label>
                                    <div class="custom-file">
                                        <input class="form-control" placeholder="" name="fb_link" type="text"
                                            value="{{ $details->fb_link }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Twitter Link</label>
                                    <div class="custom-file">
                                        <input class="form-control" placeholder="" name="twitter_link" type="text"
                                            value="{{ $details->twitter_link }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Webiste/Blog Link</label>
                                    <div class="custom-file">
                                        <input class="form-control" placeholder="" name="website_link" type="text"
                                            value="{{ $details->website_link }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin:0 0 1rem 1rem;">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>



@endsection
