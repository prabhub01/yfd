@extends('layout.backend')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Podcast | Management</h1>
            <a href="{{ route('admin.podcast.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                Create New</a>
        </div>

        <div class="row" style="background-color: #fff; padding: 20px; border-radius:20px;">
            <table id="datatable" class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($data) && !$data->isEmpty())
                        @foreach ($data as $key => $event)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->date }}</td>
                                <td style="font-size: 25px;"> <a href="">
                                        @if ($event->is_active != 0)
                                            <i class="fas fa-check-square" title="Published"> </i>
                                        @else
                                            <i class="fas fa-minus-square" title="Unpublished"></i>
                                        @endif

                                    </a></td>

                                <td style="font-size: 15px;">
                                    <a href="{{ route('admin.podcast.edit', $event->id) }}">
                                        <i class="fas fa-pencil-alt" title="Edit"></i> </a> &nbsp;

                                    <a href="{{ route('admin.podcast.destroy', $event->id) }}"
                                        onclick="return confirm('Are you sure? This will permanently delete this Podcast !')">
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
