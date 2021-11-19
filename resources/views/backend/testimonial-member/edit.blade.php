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
            <h1 class="h3 mb-0 text-gray-800">Member's Testimonial | Edit</h1>
            <a href="{{ route('admin.member-testimonial.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                Back</a>
        </div>

        <div class="row" style="background-color: #fff; padding: 20px; border-radius:20px;">
            <form method="post" action="{{ route('admin.member-testimonial.update', $details->id) }}" accept-charset="UTF-8"
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
                                                    <input type="checkbox" name="is_active" value="1" {{ $details->is_active == 1 ? 'checked' : '' }}>
                                                    <span></span>Publish ?</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Full name <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" name="name"
                                                type="text" value="{{ $details->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Company </label>
                                            <input class="form-control" name="company"
                                                type="text" value="{{ $details->company }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Post </label>
                                            <input class="form-control" name="post"
                                                type="text" value="{{ $details->post }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Location </label>
                                                    <input class="form-control" name="location"
                                                    type="text" value="{{ $details->location }}">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Description <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control" name="description" id="" cols="30"
                                                rows="10">{{ $details->description }}</textarea>
                                        </div>

                                        <div style="margin:0 0 1rem 1rem;">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
                                    <div class="form-group"> <label class="control-label">Photo </label>
                                        {{-- <span
                                            class="text-muted float-right small">Preferred size: 140x160px</span> --}}
                                        <div class="custom-file"> <input type="file" name="image"
                                                accept="image/png, image/jpeg"> </div>
                                    </div>

                                    @if (file_exists('uploads/member-testimonial/' . $details->image) && !empty($details->image))
                                        <div class="imageContainer"> <img src="{{ url('/uploads/member-testimonial/' . $testimonials->image) }}"
                                                alt="No Image Found" srcset="" width="100%" height="100%">
                                            {{-- <div class="overlay"> <a
                                                    href="{{ route('admin.member-testimonial.destroyImage', $details->id) }}"
                                                    class="icon" title="User Profile"> <i class="fas fa-trash-alt"
                                                        title="Delete"></i> </a>
                                            </div> --}}
                                        </div>

                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>



@endsection
