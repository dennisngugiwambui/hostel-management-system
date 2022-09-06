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
                        <th scope="col">Hostel Name</th>
                        <th scope="col">Location</th>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        <th scope="col">type</th>
                        <th scope="col">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($detail as $hostels)
                        <tr>
                            <td>{{ $hostels->id }}</td>
                            <td>{{ $hostels->name }}</td>
                            <td>{{ $hostels->location}}</td>
{{--                            incase you need to download a file from the controller.. --}}
{{--                            <td><a href="imagename/{{$hostels->image}}" download="{{$hostels->name}}">download</a> </td>--}}
                            <td><img src="imagename/{{$hostels->image}}"  class="img-fluid" style="height: 50px; width: 50px;"> </td>
                            <td>{{ $hostels->price }}</td>
                            <td>@if ($hostels->type==1)Single rooms
                                @elseif($hostels->type==2) Bedsitter
                                @elseif($hostels->type==3) One bedroom
                                @else All in one
                                @endif
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#editHostel_{{ $hostels->id }}">
                                        <i class="fa fa-edit"></i>Edit</button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteHostel_{{ $hostels->id }}"> <i class="fa fa-trash"></i> Del</button>

                                </div>
                            </td>
                        </tr>
                {{-- EDIT Hostel MODAL --}}
                <div class="modal right fade" id="editHostel_{{  $hostels->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    {{-- modal for editing Hostel details--}}
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="staticBackdropLabel">Add Hostel</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $hostels->id }}
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('update', $hostels->id) }}" method="post" enctype="multipart/form-data">
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
                                        <input type="text" name="name" id="" value="{{  $hostels->name }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Location</label>
                                        <input type="text" name="location" id="" value="{{  $hostels->location }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Hostel Price</label>
                                        <input type="number" name="price" id="" value="{{  $hostels->price }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Hostel type</label>
                                        <select name="type">
                                            <option>--select--</option>
                                            <option value="1"  @if ( $hostels->type==1)
                                                         selected

                                                @endif>Single rooms</option>
                                            <option  value="2" @if ( $hostels->role==2)
                                                         selected

                                                @endif>Bedsitters</option>
                                            <option value="3"  @if ( $hostels->role==3)
                                                         selected

                                                @endif>One bedroom</option>
                                            <option value="4" @if ( $hostels->role==4)
                                                         selected

                                                @endif>All in one</option>
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="id" value='{{   $hostels->id }}' class="btn btn-primary btn-block">Update Hostel</button>
                                        {{-- This is error nuber 1 --}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- DELETEUHostel MODAL --}}
                <div class="modal right fade" id="deleteHostel_{{  $hostels->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    {{-- modal for editing Hostel details--}}
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="staticBackdropLabel">delete Product</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $hostels->id }}
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('destroy',['id'=> $hostels->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf


                                    <p> Are you sure you want to delete this {{  $hostels->name }}</p>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger" >Delete Product</button>
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
