@extends('layout.backend')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Old Team | Management</h1>
        <a href="{{ route('admin.old-team.create') }}"
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            Create New</a>
    </div>

    <div class="row" style="background-color: #fff; padding: 20px; border-radius:20px;">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Post</th>
                    <th scope="col">Image</th>
                    <th scope="col">Tenure Year</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($data) && !$data->isEmpty())
                @foreach ($data as $key => $team)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $team->full_name }}</td>
                    <td>{{ $team->designation }}</td>
                    <td style="width: 30%;">
                        @if (file_exists('uploads/old-team/' . $team->photo) && !empty($team->photo))
                        <img src="{{url('/uploads/old-team/' . $team->photo)}}" alt="Not found" srcset="" width="30%"
                            height="30%">
                        @endif
                    </td>
                    <td>{{ $team->tenure_year }}</td>
                    <td style="font-size: 25px;"> <a href="">
                            @if ($team->is_active != 0)
                            <i class="fas fa-check-square" title="Published"> </i>
                            @else
                            <i class="fas fa-minus-square" title="Unpublished"></i>
                            @endif

                        </a></td>

                    <td style="font-size: 15px;"> <a href="{{ route('admin.old-team.edit', $team->id) }}"> <i
                                class="fas fa-pencil-alt" title="Edit"></i> </a> &nbsp; <a
                            href="{{ route('admin.old-team.destroy', $team->id) }}">
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