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
            <h1 class="h3 mb-0 text-gray-800">Contact Us From | View</h1>
            <a href="{{ route('admin.contact-us.index') }}"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                Back</a>
        </div>

        <div class="row" style="background-color: #fff; padding: 20px; border-radius:20px;">
            <div class="col-12 col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 30%">#</th>
                            <th scope="col" style="width: 70%;">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Date</th>
                            <td>{{ date('d M, Y', strtotime($details->created_at))}}</td>
                        </tr>
                        <tr>
                            <th>Full Name</th>
                            <td>{{ $details->full_name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $details->email }}</td>
                        </tr>
                        <tr>
                            <th>Contact</th>
                            <td>{{ $details->contact }}</td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>{{ $details->message }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
