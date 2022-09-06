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
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Hostel_id</th>
                            <th scope="col">Room</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date</th>
                            <th scope="col">Balance</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($approve as $booked)
                            <tr>
                                <td>{{ $booked->id }}</td>
                                <td>{{ $booked->hostel_id }}</td>
                                <td>{{ $booked->room}}</td>
                                <td>{{ $booked->price }}</td>
                                <td>{{ $booked->status }}</td>
                                <td>{{ $booked->date }}</td>
                                <td>{{ $booked->balance }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#approveBooking_{{ $booked->id }}">
                                            <i class="fa fa-approve"></i>Approve</button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteBooking_{{ $booked->id }}"> <i class="fa fa-trash"></i> Decline</button>

                                    </div>
                                </td>
                            </tr>
                            {{-- EDIT Hostel MODAL --}}
                            <div class="modal right fade" id="approveBooking_{{  $booked->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                            <form action="{{route('approvingBooking',$booked->id)}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <p>By clicking on the Approve Button means you have confirmed all the details are correct. please know that this decision is irreversible</p>
                                                <div class="modal-footer">
                                                    <button type="submit" name="id" value='{{   $booked->id }}' class="btn btn-primary btn-block">Approve booking</button>
                                                    {{-- This is error nuber 1 --}}
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- DELETEUHostel MODAL --}}
                            <div class="modal right fade" id="deleteBooking_{{  $booked->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
