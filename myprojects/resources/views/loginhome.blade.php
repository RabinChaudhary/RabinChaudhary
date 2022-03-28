@extends('master')
@section('content')

<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-uppercase mb-0">Manage Users</h5>
            </div>
            <div class="table-responsive">
                <table class="table no-wrap user-table mb-0">
                  <thead>
                    <tr>
                      <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Firstname</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Lastname</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Email</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Mobile</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Gender</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Created At</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($users as $user)
                    <tr>
                      <td class="pl-4">{{$user->id}}</td>
                      <td>
                          <h5 class="font-medium mb-0">{{$user->firstname}}</h5>
                      </td>
                      <td>
                          <span class="text-muted">{{$user->lastname}}</span><br>
                      </td>
                      <td>
                          <span class="text-muted">{{$user->email}}</span><br>
                      </td>
                      <td>
                          <span class="text-muted">{{$user->mobile}}</span><br>
                          
                      </td>
                      <td>
                      <span class="text-muted">{{$user->gender}}</span><br>
                      </td>
                      <td>
                      <span class="text-muted">{{$user->created_at}}</span><br>
                      </td>
                      <td>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="fa fa-key"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-trash"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-edit"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-upload"></i> </button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@stop