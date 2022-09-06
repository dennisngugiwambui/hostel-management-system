@extends('user.app')

@section('content')
    <section class="content">
        @include('sweetalert::alert')
        <div class="container-fluid">
            <form action="{{ route('hostelbooking.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="hostel_id" class="form-label">Hostel Name</label>
                    <select name="hostel_id" id="hostel_id" class="form-control hostel_id">
                        <option value="">Select Hostel</option>
                        @foreach ($hostels as $hostel)
                            <option data-price="{{ $hostel->price }}" value="{{ $hostel->id }}">{{ $hostel->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="room" class="form-label">Room Number</label>
                    <input type="text" name="room" class="form-control" id="room" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" id="Price" aria-describedby="price" required>
                </div>
                <div class="mb-3">
                    <label for="people" class="form-label">People</label>
                    <input type="number" name="people" class="form-control" id="people" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" name="phone" class="form-control" id="phone" aria-describedby="phone" required>
                </div>
                <div class="mb-3">
                    <label for="balance" class="form-label">Balance</label>
                    <input type="number" name="balance" class="form-control" id="balance" required>
                </div>
                <div class="mb-3">
                    <label for="people" class="form-label">Date</label>
                    <input type="date" name="date" class="form-control" id="date" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </section>
@endsection
