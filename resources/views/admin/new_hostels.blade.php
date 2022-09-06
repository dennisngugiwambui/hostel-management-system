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
<div>
    @include('admin.sidebar')
</div>


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="modal-body " style="background: #0dcaf0; margin: 0 auto; width:80%;" >

            <form action="{{route('addingNew')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="form-group>
                        <label for="image">Hostel Image</label>
                        <input type="file" class="form-control" name="image" id="image" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Hostel Name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Hostel location</label>
                        <input type="text" class="form-control" name="location" id="location" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price per semester</label>
                        <input type="number" class="form-control" name="price" id="price" required>
                    </div>
                    <div class="form-group">
                        <label for="rooms">Number of rooms</label>
                        <input type="number" class="form-control" name="rooms" id="rooms" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Type of hostel</label>
                        <select name="type" id="type" class="form-control">
                            <option value="1">--select--</option>
                            <option value="2">Single rooms</option>
                            <option value="3">Bedsitters</option>
                            <option value="4">One bedroom</option>
                            <option value="5">all in one</option>
                        </select>
                    </div>
            </div>
                <button class="btn btn-primary btn-block">Add Hostel</button>
            </form>
        </div>
    </main>
</div>
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
