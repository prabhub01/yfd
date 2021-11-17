@extends('layout.backend')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Volunteer Form | Management</h1>
            {{-- <a href="{{ route('admin.event.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                Create New</a> --}}
        </div>

        <div class="row" style="background-color: #fff; padding: 20px; border-radius:20px;">
            <table id="datatable" class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($data) && !$data->isEmpty())
                        @foreach ($data as $key => $volunteer)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ date('d M, Y', strtotime($volunteer->created_at))}}</td>
                                <td>{{ $volunteer->full_name }}</td>
                                <td>{{ $volunteer->subject }}</td>
                                <td style="font-size: 15px;">
                                    <a href="{{ route('admin.volunteer.view', $volunteer->id) }}">
                                        <i class="far fa-eye" title="View"></i> </a> &nbsp;

                                    <a href="{{ route('admin.volunteer.destroy', $volunteer->id) }}"
                                        onclick="return confirm('Are you sure? This will permanently delete this Volunteer Form !')">
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
