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
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addRooms">
                        ADD Rules
                    </button>
                    <!-- Add Rules -->
                    <div class="modal fade" id="addRooms" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Rules</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('newRules')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="form-group">
                                                <label for="hostel">Rule Body </label>
                                                <input type="text" class="form-control" name="body" placeholder="input rule">
                                            </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary btn-block">Add Room</button>
                                        </div>
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
                            <th scope="col">Rules</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($rules as $rule)
                            <tr>
                                <td>{{ $rule->id }}</td>
                                <td>{{ $rule->body}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#editRule_{{ $rule->id }}">
                                            <i class="fa fa-edit"></i>Update</button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteRule_{{ $rule->id }}"> <i class="fa fa-trash"></i> Del</button>
                                    </div>
                                </td>
                            </tr>
                            {{-- EDIT Rule MODAL --}}
                            <div class="modal right fade" id="editRule_{{  $rule->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                {{-- modal for editing Rules details--}}
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="staticBackdropLabel">Update Rule</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ $rule->id }}
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('UpdatingRules', $rule->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="">Rule</label>
                                                    <input type="text" name="room" id="" value="{{  $rule->body }}" class="form-control">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" name="id" value='{{   $rule->id }}' class="btn btn-primary btn-block">Update Rule</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- DELETE Rule MODAL --}}
                            <div class="modal right fade" id="deleteRule_{{  $rule->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                {{-- modal for editing Rule details--}}
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="staticBackdropLabel">Delete Rule</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ $rule->id }}
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('DestroyRule',['id'=> $rule->id]) }}" method="post" enctype="multipart/form-data">
                                                @csrf


                                                <p><b>Are you sure you want to delete this</b> {{  $rule->body }}</p>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger" >Delete Rule</button>
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
