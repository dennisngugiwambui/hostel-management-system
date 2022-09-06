@extends('admin.app')

@section('content')
    <div id="layoutSidenav_content">
        @include('sweetalert::alert')
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
                            <th scope="col">Hostel_id</th>
                            <th scope="col">Price</th>
                            <th scope="col">Room</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date</th>
                            <th scope="col">Balance</th>
                            <th scope="col">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($booked as $booked)
                            <tr>
                                <td>{{ $booked->hostel_id }}</td>
                                <td>{{ $booked->price}}</td>
                                <td>{{ $booked->room }}</td>
                                <td style="background: coral; color: wheat;">{{ $booked->status }}</td>
                                <td>{{ $booked->date }}</td>
                                <td>{{ $booked->balance }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#editHostel_{{ $booked->id }}">
                                            <i class="fa fa-edit"></i>Confirm</button>
                                        <a href="{{route('PrintReceipt')}}" type="submit" class="btn btn-sm btn-secondary"> <i class="fa fa-print"></i> Print</a>

                                    </div>
                                </td>
                            </tr>
                            {{-- EDIT Hostel MODAL --}}
                            <div class="modal right fade" id="editHostel_{{  $booked->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                {{-- modal for editing Hostel details--}}
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="staticBackdropLabel">Confirm Booking</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ $booked->id }}
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('bookingupdate', $booked->id) }}" method="post" enctype="multipart/form-data">
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
                                                    <label for="">Hostel_id</label>
                                                    <input type="text" name="hostel_id" id="" value="{{  $booked->hostel_id }}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Room No.</label>
                                                    <input type="text" name="room" id="" value="{{  $booked->room }}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Price</label>
                                                    <input type="number" name="price" id="" value="{{  $booked->price }}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">People</label>
                                                    <input type="number" name="people" id="" value="{{  $booked->people }}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Balance</label>
                                                    <input type="number" name="total_amount" id="" value="{{  $booked->balance }}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Date</label>
                                                    <input type="date" name="date" id="" value="{{  $booked->date }}" class="form-control">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" name="id" value='{{   $booked->id }}' class="btn btn-primary btn-block">Confirm booking</button>
                                                    {{-- This is error nuber 1 --}}
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- DELETEUHostel MODAL --}}
                            <div class="modal right fade" id="deleteHostel_{{  $booked->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                {{-- modal for editing Hostel details--}}
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="staticBackdropLabel">decline Booking</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ $booked->id }}
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('bookingdestroy',['id'=> $booked->id]) }}" method="post" enctype="multipart/form-data">
                                                @csrf


                                                <p> Are you sure you want to delete this {{  $booked->hostel_id }}</p>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger" >Decline Booking</button>
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


@endsection
