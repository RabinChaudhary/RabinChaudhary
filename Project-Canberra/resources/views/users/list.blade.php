@extends('layouts.masters')

@section('content')
@push('style')
<style>
    img{
        height: 10rem;
        width:10rem;
    }
</style>
@endpush
    <div class="col-xs-6">


        <div class="container">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Users</h1>
                <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">
                    <i class="fas fa-plus"></i> Add New
                </a>
            </div>


            <!-- Users list -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">All Users</h6>
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </button>
                            <strong>Success !</strong> {{ session('success') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Address</th>
                                    <th>Profile Picture</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td><?php if($user->status=="active") { ?>

                                            <a href="{{ url('/status-update', $user->id) }}"
                                                class="btn btn-success">Active</a>
                                            <?php } else{ ?>
                                            <a href="{{ url('/status-update', $user->id) }}"
                                                class="btn btn-danger">Inactive</a>
                                            <?php } ?>
                                            {{ $user->status }}
                                        </td>
                                        <td>{{$user->address}}</td>
                                        <td><img src="/storage/images/{{$user->image}}" alt=""></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
