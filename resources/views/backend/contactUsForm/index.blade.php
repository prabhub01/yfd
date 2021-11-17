@extends('layout.backend')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Contact Us Form | Management</h1>
        </div>

        <div class="row" style="background-color: #fff; padding: 20px; border-radius:20px;">
            <table id="datatable" class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Message</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($data) && !$data->isEmpty())
                        @foreach ($data as $key => $contactUs)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ date('d M, Y', strtotime($contactUs->created_at))}}</td>
                                <td>{{ $contactUs->full_name }}</td>
                                <td>{{ $contactUs->message }}</td>
                                <td>{{ $contactUs->contact }}</td>
                                <td style="font-size: 15px;">
                                    <a href="{{ route('admin.contact-us.view', $contactUs->id) }}">
                                        <i class="far fa-eye" title="View"></i> </a> &nbsp;

                                    <a href="{{ route('admin.contact-us.destroy', $contactUs->id) }}"
                                        onclick="return confirm('Are you sure? This will permanently delete this Contact Us Form !')">
                                        <i class="fas fa-trash-alt" title="Delete"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td> No Record(s) Found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
