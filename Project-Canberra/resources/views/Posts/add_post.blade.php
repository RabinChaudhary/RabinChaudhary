@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Add New Post</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="">Blogs Management</a></li>
                        <li class="breadcrumb-item active">Add Event</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal"
        data-mdb-whatever="@getbootstrap">
        Add new Blog Post
    </button>
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
                <p class="card-text mb-auto">{{ $post->person->name }}</p>
            </div>
            <div class="col d-none d-md-flex justify-content-end">
                <img class="" src="/storage/images/{{ $post->image_path }}" width="400" height="250" alt="">
            </div>
           
        </div>
    @endforeach


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Blog Post</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="{{ route('addPost') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="mb-3">
                            <label for="title" class="col-form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title"
                                @error('title') is-invalid @enderror value="" autofocus>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="mb-3">
                                <label for="image" class="col-form-label">New Image</label>
                                <input type="file" class="form-control" name="image" id="image"
                                    @error('image') is-invalid @enderror value="">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="mb-3">
                                    <label for="content" class="col-form-label">Description:</label>
                                    <textarea rows="10" class="form-control" name="content" id="content" @error('content') is-invalid @enderror value="">

                                        </textarea>
                                    @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save post</button>
                                </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
