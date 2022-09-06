<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Hostel Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="admin/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">

@include('sweetalert::alert')

@include('admin.navbar')

@include('admin.sidebar')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <p style="background: #4bde97;">Time: <span id="datetime"></span></p>

            <script>
                var dt = new Date();
                document.getElementById("datetime").innerHTML = dt.toLocaleTimeString();
            </script>
            <div class="modal-body ">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <td scope="col">Usertype</td>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $users)
                        <tr>
                            <td>{{ $users->id }}</td>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->phone}}</td>
                            <td scope="col">
                                @if ($users->usertype==1)Admin
                                @else Student
                                @endif
                            </td>
                            <td>{{ $users->email }}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#editUser_{{ $users->id }}">
                                        <i class="fa fa-edit"></i>Edit</button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUser_{{ $users->id }}"> <i class="fa fa-trash"></i> Del</button>
                                </div>
                            </td>
                        </tr>
                        {{-- EDIT Hostel MODAL --}}
                        <div class="modal right fade" id="editUser_{{  $users->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            {{-- modal for editing Hostel details--}}
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="staticBackdropLabel">Edit User</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $users->id }}
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('user_update', $users->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf

                                            {{-- @method('put') --}}

                                            {{-- <div class="form-group">
                                                <label for="">Name<label>
                                                    <input type="text" name="name" id="" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Email<label>
                                                    <input type="email" name="email" id="" class="form-control">
                                            </div> --}}
                                            <div class="form-group">
                                                <label for="">Name</label>
                                                <input type="text" name="name" id="" value="{{  $users->name }}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Gmail</label>
                                                <input type="email" name="email" id="" value="{{  $users->email }}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Phone</label>
                                                <input type="number" name="phone" id="" value="{{  $users->phone }}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Usertype</label>
                                                <input type="number" name="usertype" id="" value="{{  $users->usertype }}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="password" name="password" id="" value="{{  $users->password }}" class="form-control">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="id" value='{{   $users->id }}' class="btn btn-primary btn-block">Update Hostel</button>
                                                {{-- This is error nuber 1 --}}
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- DELETEUHostel MODAL --}}
                        <div class="modal right fade" id="deleteUser_{{  $users->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            {{-- modal for editing User details--}}
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="staticBackdropLabel">delete User</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $users->id }}
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('user_destroy',['id'=> $users->id]) }}" method="post" enctype="multipart/form-data">
                                            @csrf


                                            <p> Are you sure you want to delete this {{  $users->name }}</p>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger" >Delete User</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>
</div>
</div>
</div>
</div>

</div>

</div>
</main>
</div>
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Admin @2022/2023</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="admin/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="admin/assets/demo/chart-area-demo.js"></script>
<script src="admin/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="admin/js/datatables-simple-demo.js"></script>
</body>
</html>

