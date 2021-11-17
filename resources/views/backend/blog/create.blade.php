@extends('layout.backend')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Blog | Create</h1>
            <a href="{{ route('admin.blog.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                Back</a>
        </div>

        <div class="row" style="background-color: #fff; padding: 20px; border-radius:20px;">
            <form method="post" action="{{ route('admin.blog.store') }}" accept-charset="UTF-8" class="form-horizontal"
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
                                            <label class="control-label">Title <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" placeholder="Enter the Title" name="title"
                                                type="text">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label class="control-label">Slug </label>
                                            <input class="form-control" placeholder="" name="slug" type="text">
                                        </div> --}}
                                        <div class="form-group">
                                            <label class="control-label">Description <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control ckeditor" name="description" id="" cols="30"
                                                rows="10"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Writer <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="writer" class="form-control"
                                                placeholder="Enter the Writer's Name">
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
                                    <div class="form-group"> <label class="control-label">Banner </label> <span
                                            class="text-muted float-right small">Preferred size: 1024x280px</span>
                                        <div class="custom-file"> <input type="file" name="banner"
                                                accept="image/png, image/jpeg"> </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-group"> <label class="control-label">Image </label>
                                        {{-- <span class="text-muted float-right small">Preferred size: 1024x280px</span> --}}
                                        <div class="custom-file"> <input type="file" name="image"
                                                accept="image/png, image/jpeg"> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Date</label>
                                    <span class="text-danger">*</span>
                                    <div class="custom-file">
                                        <input class="form-control" placeholder="" name="date" type="date">
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label class="control-label">Location</label>
                                    <span class="text-danger">*</span>
                                    <div class="custom-file">
                                        <input class="form-control" placeholder="Enter the Location of the event" name="location" type="text">
                                    </div>
                                </div> --}}
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
