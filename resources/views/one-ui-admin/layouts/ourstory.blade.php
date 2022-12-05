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
                            @if ($ourstories->count() > 0)
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>Id</th>
                                        <th>Story Title</th>
                                        <th>Who We Are</th>
                                        <th>Our Vision</th>
                                        <th>History</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($ourstories as $ourstory)
                                            <tr>
                                                <td>{{ $ourstory->id }}</td>
                                                <td>{{ $ourstory->who_we_are }}</td>
                                                <td>{{ $ourstory->vision }}</td>
                                                <td>{{ $ourstory->history }}</td>
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
