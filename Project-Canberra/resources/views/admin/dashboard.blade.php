@extends('layouts.admin')
@section('title', 'admin dashboard')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Dashboard</li>
                    
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->


<!-- end row -->

<div class="row">
    {{-- <div class="col-xl-8"> --}}
    <div class="card">
        <div class="card-body">
            <div class="float-end">
            </div>
            <h4 class="card-title mb-4">Recent Users</h4>
            <div class="table-responsive">
                <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                    <thead class="table-light">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Address</th>
                            <th>Registered date</th>
                            <th>Profile Picture</th>
                        </tr>
                    </thead><!-- end thead -->
                    <tbody id="records">
                        <span class="d-none">{{ $admin = Session('admin') }}</span>
                        <span class="d-none">{{$users=Session('users')}}</span>
            
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    <h6 class="mb-0">{{ $user->name }}</h6>
                                </td>
                                <td>{{ $user->email }}</td>
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

                                <td>
                                    {{ $user->address }}
                                </td>
                                <td>
                                    {{ $user->created_at }}
                                </td>
                                <td>
                                    <img src="/storage/images/{{ $user->image }}" alt=""
                                        class="avatar-md rounded-circle">
                                </td>
                        @endforeach
                        </tr>
                        <!-- end -->

                    </tbody><!-- end tbody -->
                </table>
                
            </div>
        </div><!-- end card -->
    </div><!-- end card -->
    
</div>
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
