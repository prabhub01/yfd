@extends('layout.backend')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">AGM Report | Create</h1>
        <a href="{{ route('admin.annual-report.index') }}"
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            Back</a>
    </div>

    <div class="row" style="background-color: #fff; padding: 20px; border-radius:20px;">
        <form method="post" action="{{ route('admin.annual-report.store') }}" accept-charset="UTF-8"
            class="form-horizontal" enctype="multipart/form-data" style="width: 100%;">
            @csrf
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="card card-custom gutter-b">
                        <div class="card-body">
                            <div class="tab-content">
                                <div id="aa-1" class="tab-pane fade in active show">
                                    <div class="form-group">
                                        {{-- <div class="checkbox-inline">
                                            <label class="checkbox checkbox-lg">
                                                <input type="checkbox" name="is_active" value="1" checked="checked">
                                                <span></span>Publish ?</label>
                                        </div>
                                    </div> --}}

                                    <div class="form-group">
                                        <label class="control-label">Title <span class="text-danger">*</span></label>
                                        <input class="form-control" placeholder="" name="title" type="text">
                                    </div>
                                    {{-- <div class="form-group">
                                        <label class="control-label">Slug </label>
                                        <input class="form-control" placeholder="" name="slug" type="text">
                                    </div> --}}
                                    <div class="form-group">
                                        <label class="control-label">Date <span class="text-danger">*</span></label>
                                        <input class="form-control" placeholder="" name="date" type="date">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">File <span class="text-danger">*</span></label>
                                        <br>
                                        <input type="file" name="file" class="" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">

                </div>
                <div style="margin:1rem 0 1rem 1rem;">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

</div>



@endsection