@extends('layouts.app')
@section('title', 'dashboard')
@section('content')
    {{-- Appbar --}}
    <div class="bg-white d-flex align-items-center fixed-top shadow" style="min-height:56px; z-index:5;">
        <div class="container-fluid">
            <div class="row align-items-center">
                {{-- search --}}
                <div class="col d-flex aalign-items-center">
                    <i class="fa-brands fa-facebook text-primary" style="font-size:3rem;"></i>
                    <div class="input-group ms-2">
                        {{-- mobile --}}
                        {{-- desktop --}}
                        <span class="input-group-prepend d-none d-lg-block">
                            <div class="input-group-text bg-gray border-0 rounded-pill"
                                style="min-height:40px; min-width:230px;">
                                <i class="fas fa-search me-2 text-muted"></i>
                                <p class="m-0 fs-7 text-muted">Search Postbook</p>
                            </div>
                        </span>
                    </div>
                </div>
                {{-- nav --}}
                <div class="col"></div>
                {{-- menu --}}
                <div class="col"></div>
            </div>
        </div>

    </div>





@endsection
