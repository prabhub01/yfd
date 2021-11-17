@extends('layout.backend')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Team | Create</h1>
            <a href="{{ route('admin.team.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                Back</a>
        </div>

        <div class="row" style="background-color: #fff; padding: 20px; border-radius:20px;">
            <form method="post" action="{{ route('admin.team.store') }}" accept-charset="UTF-8" class="form-horizontal"
                enctype="multipart/form-data" style="width: 100%;">
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
                                                type="text">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Designation <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" placeholder="Designation" name="designation"
                                                type="text">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Description <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control" name="description" id="" cols="30"
                                                rows="10"></textarea>
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
                                    {{-- <label class="control-label">Photo <span
                                        class="text-danger">*</span></label></label>
                                    <span class="text-muted float-right small">Preferred size: 140x160px</span>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="photo" id="image-file">
                                        <label class="custom-file-label selected" for="image-file"></label>
                                    </div> --}}
                                    <div class="form-group"> <label class="control-label">Photo </label> <span
                                            class="text-muted float-right small">Preferred size: w:720px, h:900px</span>
                                        <div class="custom-file"> <input type="file" name="photo"
                                                accept="image/png, image/jpeg"> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Email<span class="text-danger">*</span></label></label>
                                    <div class="custom-file">
                                        <input class="form-control" placeholder="" name="email" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Linkedin Link</label>
                                    <div class="custom-file">
                                        <input class="form-control" placeholder="" name="linkedin_link" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Insta Link</label>
                                    <div class="custom-file">
                                        <input class="form-control" placeholder="" name="insta_link" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Facebook Link</label>
                                    <div class="custom-file">
                                        <input class="form-control" placeholder="" name="fb_link" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Twitter Link</label>
                                    <div class="custom-file">
                                        <input class="form-control" placeholder="" name="twitter_link" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Webiste/Blog Link</label>
                                    <div class="custom-file">
                                        <input class="form-control" placeholder="" name="website_link" type="text">
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
