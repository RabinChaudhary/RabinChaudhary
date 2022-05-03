@extends('master')

@section('title', 'Update Users')
@section('content')

    <div class="container">





        <span class="error-msg center error-text"></span>


        <form id="updateform" method="POST" action="{{ route('update') }}">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
            {{ csrf_field() }}
            <h2 class="text-center">Update User</h2>
            <input type="hidden" name="user_id" value="{{ $user->id }}" />

            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="first_name">First name</label>
                        <input type="text" id="first_name" class="form-control" name="first_name"
                            value={{ $user->firstname }} />


                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="last_name">Last name</label>
                        <input type="text" id="last_name" class="form-control" name="last_name"
                            value={{ $user->lastname }} />


                    </div>
                </div>
            </div>
            {{-- email --}}
            <div class="form-outline mb-4">
                <label class="form-label" for="email">Email address</label>
                <input type="email" id="email" class="form-control" name="email" value={{ $user->email }} />


            </div>

            <div class="form-outline mb-4">

                <label for="inputState">Gender</label>
                <select id="inputState" class="form-control" name="gender" id="gender" value={{ $user->gender }}>
                    <option selected value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>


            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="mobile">Mobile</label>
                <input type="text" id="mobile" class="form-control" name="mobile" value={{ $user->mobile }} />

            </div>



            <!-- Submit button -->
            <button type="submit" name="update_submit" class="btn btn-primary btn-block mb-4">Update</button>

        </form>
    </div>
@endsection
