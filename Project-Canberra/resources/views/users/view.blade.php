@extends('layouts.app')
@section('content')

@if(!{{$name}})
   This is {{$name}} - {{$gender}} - {{$age}}
@elseif
   something
@endif

@stop

