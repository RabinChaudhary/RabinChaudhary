@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-sm-6 col-md-4">
                        <img src="{{URL::asset('/tmp/uploads/'. $res->image)}}" alt="image" width="100" height="100">
                    </div>
                    <div class="col-8 col-sm-6 col-md-8">
                        <h1>{{$res->name}}</h1>
                        <p>
                            <span>{{$res->email}}</span><br />
                            <span class="text-muted">{{$res->phone}}</span><br />
                            <span class="text-muted">{{$res->address}}</span><br />

                            <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="fa fa-key"></i> </button>
                            <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-trash"></i> </button>
                            <a href="{{ url('/user/' . $res->id . '/edit') }}" class="btn btn-xs btn-info pull-right"><i class="fa fa-edit"></i></a>
                            <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-home"></i> </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop








         