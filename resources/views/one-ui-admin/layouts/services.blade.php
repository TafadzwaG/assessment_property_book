@extends('one-ui-admin.master')

@section('content')
    <div class="panel-header panel-header-sm"></div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" style="display: flex; justify-content:space-between">Services

                            <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                data-target="#exampleModal">+ New</button>
                        </h4>

                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status')}}
                        </div>
                    @endif

                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New Service</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none; border-radius:  50%">
                                        <span aria-hidden="true">&times;</span>
                                    </button>

                                   
                                </div>
                                <form action="/save_service" method="POST">
                                    {{ csrf_field() }}
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label for="title" class="col-form-label">Title:</label>
                                            <input type="text" name="title" class="form-control" id="title">
                                        </div>
                                        <div class="form-group" style="display: block">
                                            <label for="icon" class="col-form-label" style="">Icon:</label>
                                            <input type="file" name="icon" class="form-control" id="icon" style="opacity: 1">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Description:</label>
                                            <textarea class="form-control" name="description" id="message-text"></textarea>
                                        </div>

                                    </div>
                                    <div class="modal-footer" style="border: none">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if ($services->count() > 0)
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Icon</th>
                                        <th>Description</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $service)
                                            <tr>
                                                <td>{{ $service->id }}</td>
                                                <td>{{ $service->title }}</td>
                                                <td>{{ $service->icon }}</td>
                                                <td>{{ $service->description }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-success">Edit</a>
                                                </td>
                                                <td> <a href="#" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            @else
                                <h4 class="card-title">No Services Available</h4>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
