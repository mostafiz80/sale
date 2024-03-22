@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="col-md-4 mb-3">
            <h1 class="h3 d-inline">View All Users</h1>
            <a class="badge bg-dark text-white ms-2" href="/">
                Add new User
            </a>
        </div>



        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-light">
                                <thead>
                                    <tr>
                                        <th scope="col">#ID </th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Verified</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Registerd</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userdata as $user)
                                        <tr>
                                            <td scope="row">{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->email_verified_at }}</td>
                                            <td>{{ $user->role }}</td>

                                            <td><a href="{{ route('admin.edit', $user->id) }}">Edit</a></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="card-footer">
                        <h1 class="card-title">this is card footer</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
