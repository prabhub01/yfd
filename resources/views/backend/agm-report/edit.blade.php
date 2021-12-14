@extends('layout.backend')
<style>
    .imageContainer {
        position: relative;
        width: 100%;
        max-width: 400px;
    }

    /* Make the image to responsive */
    .image {
        width: 100%;
        height: auto;
    }

    /* The overlay effect (full height and width) - lays on top of the container and over the image */
    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: .3s ease;
        background-color: rgb(124, 121, 121);
    }

    /* When you mouse over the container, fade in the overlay icon*/
    .imageContainer:hover .overlay {
        opacity: 0.8;
    }

    /* The icon inside the overlay is positioned in the middle vertically and horizontally */
    .icon {
        color: white;
        font-size: 30px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }

    /* When you move the mouse over the icon, change color */
    .fa-user:hover {
        color: #eee;
    }
</style>
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">AGM Report | Edit</h1>
        <a href="{{ route('admin.annual-report.index') }}"
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            Back</a>
    </div>

    <div class="row" style="background-color: #fff; padding: 20px; border-radius:20px;">
        <form method="post" action="{{ route('admin.annual-report.update', $details->id) }}" accept-charset="UTF-8"
            class="form-horizontal" enctype="multipart/form-data" style="width: 100%;">
            @csrf
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="card card-custom gutter-b">
                        <div class="card-body">
                            <div class="tab-content">
                                <div id="aa-1" class="tab-pane fade in active show">
                                    {{-- <div class="form-group">
                                        <div class="checkbox-inline">
                                            <label class="checkbox checkbox-lg">
                                                <input type="checkbox" name="is_active" value="1" {{ $details->is_active
                                                == 1 ? 'checked' : '' }}>
                                                <span></span>Publish ?</label>
                                        </div>
                                    </div> --}}

                                    <div class="form-group">
                                        <label class="control-label">Title <span class="text-danger">*</span></label>
                                        <input class="form-control" placeholder="Enter the Title" name="title"
                                            value="{{ $details->title }}" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Date</label>
                                        <span class="text-danger">*</span>
                                        <div class="custom-file">
                                            <input class="form-control" placeholder="" name="date" type="date"
                                                value="{{ $details->date }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">File <span class="text-danger">*</span></label>
                                        <br>
                                        <input class="" placeholder="" name="file" type="file"
                                            value="{{ $details->file }}">

                                        @if (file_exists('uploads/agm-report/' . $details->file) &&
                                        !empty($details->file))
                                        <div class="imageContainer" style="margin-top: 1rem;">
                                            <a href="{{ asset('uploads/agm-report/' . $details->file) }}" download><i
                                                    class="fas fa-download"></i></a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">

                </div>
                <div style="margin:0 0 1rem 1rem;">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

</div>



@endsection