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
                            @if ($tags->count() > 0)
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Price Id</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($tags as $tag)
                                            <tr>
                                                <td>{{ $tag->id }}</td>
                                                <td>{{ $tag->title }}</td>
                                                <td>{{ $tag->price_id }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-success">Edit</a>
                                                </td>
                                                <td> <a href="#" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            @else
                                <h4 class="card-title">No Pricing Tags Available</h4>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
