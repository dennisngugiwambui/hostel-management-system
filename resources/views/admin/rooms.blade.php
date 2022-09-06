@extends('admin.app')

@section('content')


    @include('sweetalert::alert')
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
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addRooms">
                        ADD more Rooms
                    </button>
                    <!-- Add Rooms -->
                    <div class="modal fade" id="addRooms" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Rooms</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('addingRooms')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="form-group">
                                                <label for="hostel">Hostel Name </label>
                                                <select name="hostel" id="hostel" class="form-control hostel_id">
                                                    {{-- onchange="getProductPrice(this)" --}}
                                                    <option value="">Select Hostel</option>
                                                    @foreach ($hostel as $hostels)
                                                        <option data-price="{{ $hostels->price }}" value="{{ $hostels->id }}">{{ $hostels->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Room Numbers</label>
                                            <input type="text" class="form-control" name="room" id="room" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="type">Hostel Type</label>
                                            <select name="type" id="type" class="form-control">
                                                <option value="1">--select--</option>
                                                <option value="2">Single rooms</option>
                                                <option value="3">Bedsitters</option>
                                                <option value="4">One bedroom</option>
                                                <option value="5">all in one</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary btn-block">Add Room</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Hostel Name</th>
                            <th scope="col">Room Number</th>
                            <th scope="col">Hostel Type</th>
                            <th scope="col">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($rooms as $hostels)
                            <tr>
                                <td>{{ $hostels->id }}</td>
                                <td>{{ $hostels->hostel }}</td>
                                <td>{{ $hostels->room}}</td>
                                <td>{{ $hostels->type }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#editRoom_{{ $hostels->id }}">
                                            <i class="fa fa-edit"></i>Edit</button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteRoom_{{ $hostels->id }}"> <i class="fa fa-trash"></i> Del</button>

                                    </div>
                                </td>
                            </tr>
                            <!-- Edit Rooms -->
                            <div class="modal right fade" id="editRoom_{{ $hostels->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                {{-- modal for editing rooms details--}}
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="staticBackdropLabel">Add Room</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ $hostels->id }}
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('updaterooms',['id'=>$hostels->id ]) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group row">
                                                    <label for="hostel">Hostel Name </label>
                                                    <input type="text" name="hostel" class="form-control" value="{{$hostels->hostel}}" id="hostel" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Room Numbers</label>
                                                    <input type="text" name="room" class="form-control" value="{{$hostels->room}}" id="room" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="type">Hostel Type</label>
                                                    <select name="type" id="type" class="form-control">
                                                        <option value="1" @if ($hostels->type==1)
                                                            selected

                                                            @endif>Single rooms</option>
                                                        <option value="2" @if ($hostels->type==2)
                                                            selected

                                                            @endif>Bedsitter</option>
                                                        <option value="3" @if ($hostels->type==3)
                                                            selected

                                                            @endif>One Bedroom</option>
                                                        <option value="4" @if ($hostels->type==4)
                                                            selected

                                                            @endif>All in one</option>
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary btn-block">Update Room</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- DELETE Hostel MODAL --}}
                            <div class="modal right fade" id="deleteRoom_{{ $hostels->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                {{-- modal for editing Hostel details--}}
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="staticBackdropLabel">delete Room</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ $hostels->id }}
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('destroyrooms',['id'=>$hostels->id]) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <p> Are you sure you want to delete this {{ $hostels->room }}</p>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger" >Delete Room</button>
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

@endsection
