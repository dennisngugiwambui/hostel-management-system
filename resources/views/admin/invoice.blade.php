@extends('admin.app')

@section('content')
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
                        @foreach ($booking as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->hostel_id }}</td>
                                <td>{{ $book->room}}</td>
                                <td>{{ $book->phone }}</td>
                                <td>{{ $book->people }}</td>
                                <td>{{ $book->balance }}</td>
                                <td>{{ $book->date }}</td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#editHostel_{{ $book->id }}">
                                            <i class="fa fa-edit"></i>Print</button>
{{--                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteHostel_{{ $hostels->id }}"> <i class="fa fa-trash"></i> Del</button>--}}

                                    </div>
                                </td>
                            </tr>
                            {{-- Printing Hostel MODAL --}}
                            <div class="modal right fade" id="editHostel_{{  $book->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                {{-- modal for editing Hostel details--}}
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="staticBackdropLabel">Print Receipt</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ $book->id }}
                                        </div>
                                        <div class="modal-body">
                                            <div class="body">
                                                <p1>wihqoehvohfeuiowhs</p1>
                                                <input type="text" value="{{$book->people}}" readonly>
                                                <input type="submit" >
                                            </div>
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
@endsection
