@extends('layouts.admin')



@section('content')
    
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                        <h4 class="mb-sm-0">View Users</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="">Users Management</a></li>
                                <li class="breadcrumb-item active">View Users</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Users</h4>
                            <p class="card-title-desc">These are the list of Registered users and their details.</p>


                            <table class="w-100">

                                <thead>
                                    <tr class="fs-5">
            <span class="d-none">{{$users=Session('users')}}</span>

                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Address</th>
                                        <th>Registered date</th>
                                        <th>Profile picture</th>
                                    </tr>
                                </thead>
                                <tbody id="records">
                                    @foreach ($users as $user)
                                        <tr>

                                            <td>{{ $user->name }}</td>
                                            <td>
                                                <div class="font-size-13"><?php if($user->status=="active") { ?>
                                                    <i
                                                        class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>
                                                    {{ $user->status }}
                                                </div>
                                                <div class="font-size-13"><?php } else{ ?>
                                                    <i
                                                        class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>{{ $user->status }}
                                                    <?php } ?>
                                                </div>

                                            </td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td><img src="/storage/images/{{ $user->image }}" alt=""
                                                    class="avatar-md rounded-circle">
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>




                        </div>
                    </div>
                    <!-- end col -->
                </div> <!-- end row -->

            
    @endsection
    @section('scripts')
        
        
        <script>
            $(document).ready(function() {
                $("#search").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#records tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
    </script>
    @endsection
