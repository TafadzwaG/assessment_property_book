@extends('one-ui-admin.master')

@section('content')
    <div class="panel-header panel-header-sm"></div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" style="display: flex; justify-content:space-between">Pricing Tags
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                data-target="#exampleModal">+ New</button>

                        </h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if ($storyphotos->count() > 0)
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Path</th>
                                        <th>Story Id</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($storyphotos as $storyphoto)
                                            <tr>
                                                <td>{{ $storyphoto->id }}</td>
                                                <td>{{ $storyphoto->title }}</td>
                                                <td>{{ $storyphoto->path }}</td>
                                                <td>{{ $storyphoto->our_story_id }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-success">Edit</a>
                                                </td>
                                                <td> <a href="#" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            @else
                                <h4 class="card-title">No Stories Available</h4>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
