@extends('admin.app')

@section('content')
    <div id="layoutSidenav_content" style="background: pink">
        @include('sweetalert::alert')
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="modal-body ">
                    <form action="{{ route('hostelbooking.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="hostel_id" class="form-label">Hostel Name</label>
                            <select name="hostel_id" id="hostel_id" class="form-control hostel_id">
                                {{-- onchange="getProductPrice(this)" --}}
                                <option value="">Select Hostel</option>
                                @foreach ($hostels as $hostel)
                                    <option data-price="{{ $hostel->price }}" value="{{ $hostel->id }}">{{ $hostel->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="room" class="form-label">Room Number</label>
                            <input type="text" name="room" class="form-control" id="room" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" name="price" class="form-control" id="Price" aria-describedby="price">
                        </div>
                        <div class="mb-3">
                            <label for="people" class="form-label">People</label>
                            <input type="number" name="people" class="form-control" id="people">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="number" name="phone" class="form-control" id="phone" aria-describedby="phone">
                        </div>
                        <div class="mb-3">
                            <label for="balance" class="form-label">Balance</label>
                            <input type="number" name="balance" class="form-control" id="balance">
                        </div>
                        <div class="mb-3">
                            <label for="people" class="form-label">Date</label>
                            <input type="date" name="date" class="form-control" id="date">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>


                </div>
            </div>
        </main>
    </div>
    </div>
@endsection

@push('scripts')
<script>

    // $(document).ready(function(){

        // $('.add_more').on('click', function(){
        //     alert(0);
            // var product = $('.hostel_id').html();
            // var numberofrow = ($('.addMoreHostel tr').length -0) +1;
            // var tr = '<tr><td class="no" >' + numberofrow + '</td>'+
            //     '<td><select class="form-control hostel_id" id="id" name="hostel_id[]" onchange="getProductPrice(this)"> ' +product +
            //     '</select></td>'+
            //     '<td> <input type="text" name="room[]" class="form-control room"></td>'+
            //     '<td> <input type="number" readonly  id="price"  value="" name="price[]" class="form-control price" style="background: lightblue"></td>'+
            //     '<td> <input type="number" name="people[]" class="form-control people"></td>'+
            //     '<td> <input type="number" readonly style="background:tripled;" name="total_amount[]" class="form-control total_amount" style="background: lightblue"></td>'+
            //     '<td><a class="btn btn-danger btn-sm delete rounded-circle"> <i class="fa fa-times-circle"></i> </a></td>';
            // $('.addMoreHostel').append(tr);

        // });
        //deletes the row
        // $('.addMoreProduct').delegate('.delete', 'click', function(){
        //     $(this).parent().parent().remove();
        //     // alert('hello');
        // });
        //
        // // //
        // function TotalAmount(){
        //     var total=0;
        //     $('.total_amount').each(function(i, e){
        //         var amount= $this.val() -0;
        //         total += amount;
        //     });
        //     $('.total').html(total);
        // }
        // $('.addMoreProduct').delegate('.id', 'change', function(){
        //     var tr = $(this).parent().parent();
        //     var price = tr.find('.id option:selected').attr('data-price');
        //     tr.find('.price').val(price);
        //     var qty = tr.find('.people').val()-0;
        //     var price = tr.find('.price').val()-0;
        //     var total_amount = (price)*(people/0.5);
        //     tr.find('total_amount').val();
        //     TotalAmount();
        // });
        // $('.addMoreHostel').delegate('.price, .people', 'keyup', function(){
        //     var tr = $(this).parent().parent();
        //     var people = tr.find('.people').val()-0;
        //     var price = tr.find('.price').val()-0;
        //     var total_amount = (price)*(people/0.5);
        //     tr.find('.total_amount').val(total_amount);
        //     TotalAmount();
        // })
    // });

    $(document).ready(function(){
        $('.delete').on('click', function(){
            alert('0');
        }
    }

</script>
@endpush

