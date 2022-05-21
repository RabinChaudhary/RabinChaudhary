@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-uppercase mb-0">Display Users</h5>
            </div>
            <div class="table-responsive">
                <table class="table no-wrap user-table mb-0">
                  <thead>
                    <tr>
                      <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Name</th>
          
                      <th scope="col" class="border-0 text-uppercase font-medium">Email</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Phone</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Address</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Image</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Created At</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($users as $user)
                    <tr>
                      <td class="pl-4">{{$user->id}}</td>
                      <td>
                          <h5 class="font-medium mb-0">{{$user->name}}</h5>
                      </td>
                      
                      <td>
                          <span class="text-muted">{{$user->email}}</span><br>
                      </td>
                      <td>
                          <span class="text-muted">{{$user->phone}}</span><br>
                          <span class="text-muted">10: 55 AM</span>
                      </td>
                      <td>
                      <span class="text-muted">{{$user->address}}</span><br>
                      </td>
                      
                      <td>
                      <span class="text-muted"><img src="{{URL::asset('/tmp/uploads/'. $user->image)}}" alt="image" width="100" height="100"></span><br>
                      </td>
                      <td>
                      <span class="text-muted">{{$user->created_at}}</span><br>
                      </td>
                      <td>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="fa fa-key"></i> </button>
                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-trash"></i> </button>
                        <a href="{{ url('/user/' . $user->id . '/edit') }}" class="btn btn-xs btn-info pull-right"><i class="fa fa-edit"></i></a>

                        <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-home"></i> </button>
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