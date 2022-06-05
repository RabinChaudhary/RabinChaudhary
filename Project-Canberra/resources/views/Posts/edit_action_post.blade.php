@extends('layouts.admin')
@section('title', 'Update Page')
@section('content')



    <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" style="font-weight: bold">Update Your Post</h3>

                    @if (session()->has('status'))
                        <div class="alert alert-success">
                            {{ session()->get('status') }}
                        </div>
                    @endif
                    <form action="{{route('updatePost')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <input type="hidden" name="user_id" value="{{ $post->user_id }}" />
                                <input type="hidden" name="id" value="{{ $post->id }}" />

                                <div class="form-outline">
                                    <label for="title" class="form-label-lg">Title</label>
                                    <input class="form-control form-control-md" type="text" id="title" name="title" 
                                        value="{{ $post->title }}" class="@error('title') is-invalid @enderror">
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-6 mb-4 pb-2">

                                <label for="image" class="form-label">Change post picture</label>
                                <input class="form-control form-control-lg" id="image" name="image"
                                    value="{{ $post->image_path }}" type="file"
                                    class="@error('image') is-invalid @enderror">
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-4 pb-2">
                                <img src="/storage/images/{{ $post->image_path }}" style="width:100%; "
                                    alt="{{ $post->image_path }}">
                            </div>

                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="content" class="col-form-label">Description:</label>
                                <textarea rows="10" class="form-control" name="content" id="content" @error('content') is-invalid @enderror>{{ $post->content }}

                                        </textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="mt-4 pt-2">

                            <button type="submit" class="btn btn-primary">Update post</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
    


@endsection
