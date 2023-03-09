@extends('layout')

@section('content')
    <div class="container mt-2">
        <h1>User List</h1>
    </div>

    <div class="container">

        @if (Session::get('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{Session::get('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

        <div class="row py-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ($data as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="/edit/{{ $user->id }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a class="btn btn-sm btn-danger" href="/delete/{{ $user->id }}"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
