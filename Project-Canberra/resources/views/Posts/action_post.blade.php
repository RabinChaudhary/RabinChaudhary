@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Action</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="">posts Management</a></li>
                        <li class="breadcrumb-item active">Action</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success my-3">
            {{ session()->get('success') }}
        </div>
    @endif
    @foreach ($posts as $post)
        <div class="row my-3 g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">{{ $post->slug }}</strong>
                <h3 class="mb-0">{{ $post->title }}</h3>
                <div class="mb-1 text-muted">{{ $post->created_at }}</div>
                <p class="card-text mb-auto">{{ $post->content }}</p>
                <p class="card-text mb-auto">Author: {{ $post->person->name }}</p>
                <div class="d-flex gap-3">
                    <button type="button" class="btn btn-primary">
                        <a class="text-light text-decoration-none" role="button"
                            href="{{ url('/admin/post/action/edit/' . $post->id) }}">Edit <i class="fas fa-edit px-2"
                            style="color:white"></i></a>

                    </button>
                    <div>
                        <button type="button" class="btn btn-danger" data-mdb-toggle="modal" data-mdb-target="#exampleModal"
                            data-mdb-whatever="@getbootstrap">Delete<i class="fas fa-trash-alt px-2"
                                style="color:white"></i></button>


                    </div>
                </div>
            </div>
            <div class="col d-none d-md-flex justify-content-end">
                <img class="" src="/storage/images/{{ $post->image_path }}" width="400" height="250" alt="">
            </div>

        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content shadow-sm">
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <div class="modal-body">
                            <h3 class="text-center text-danger">Are you sure want to delete this post?</h3>
                        </div>
                        <div class="modal-footer justify-content-around pt-0 border-top-0">
                            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger" name="delete_user">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach

        
@endsection
