@extends('hms.app')
@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>We are JM Hostels</h4>
                                <span>Awesome, clean &amp; and best hostels</span>
                                <div class="main-border-button">
                                    <a href="#">Book Now!</a>
                                </div>
                            </div>
                            <img src="hms/assets/images/hostelc.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Bedsitters</h4>
                                            <span>Spacious Bedsitters</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Bed sitters</h4>
                                                <p>Our bedsitters are spacious and best.</p>
                                                <div class="main-border-button">
                                                    <a href="/login">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="hms/assets/images/bedsitters1.png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Single rooms</h4>
                                            <span>Spacious single rooms</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Single rooms</h4>
                                                <p>Our single rooms are spacious and best.</p>
                                                <div class="main-border-button">
                                                    <a href="#">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="hms/assets/images/singleroom.png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Single rooms</h4>
                                            <span>Spacious single rooms</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Single rooms</h4>
                                                <p>Our single rooms are spacious and best.</p>
                                                <div class="main-border-button">
                                                    <a href="#">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="hms/assets/images/hostelg.jfif">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Single Rooms</h4>
                                            <span>Spacious One-bed rooms</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>One-bedroom</h4>
                                                <p>Our one-bedrooms are spacious and best.</p>
                                                <div class="main-border-button">
                                                    <a href="#">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="hms/assets/images/onebedroom.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Single rooms ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Single rooms</h2>
                        <span>Our single rooms are spacious and well furnished</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">

                                    </div>
                                    <img src="hms/assets/images/singleroom.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Single room</h4>
                                    <span>Ksh 12000.00 Per Sem</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">

                                    </div>
                                    <img src="hms/assets/images/singleroom.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Single rooms</h4>
                                    <span>Ksh 9000.00 Per Sem</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            @foreach($hostels as $hostel)
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                        </div>
                                        <img src="imagename/{{$hostel->image}}"> alt="{{$hostel->name}}">
                                    </div>
                                    <div class="down-content">
                                        <h4>
                                            @if ($hostel->type==1)Single rooms
                                            @elseif($hostel->type==2) Bedsitter
                                            @elseif($hostel->type==3) One bedroom
                                            @else All in one
                                            @endif
                                        </h4>
                                        <span>Ksh: {{ $hostel->price }} per sem</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">

                                    </div>
                                    <img src="hms/assets/images/onebedroom1.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Single rooms</h4>
                                    <span>Ksh 20000.00 Per Sem</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Single rooms Area Ends ***** -->

    <!-- ***** Bedsitters ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Bedsitters</h2>
                        <span>Our bedsitters are well furnished and best</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="women-item-carousel">
                        <div class="owl-women-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">

                                    </div>
                                    <img src="hms/assets/images/bedsitters1.png" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>bedsiiter 1</h4>
                                    <span>Ksh 25000.00 Per</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">

                                    </div>
                                    <img src="hms/assets/images/bedsitters3.png">
                                </div>
                                <div class="down-content ">
                                    <h4>Bedsitter 2</h4>
                                    <span>Ksh 14000.00 Per Sem</span>
                                    <ul class="stars ">
                                        <li><i class="fa fa-star "></i></li>
                                        <li><i class="fa fa-star "></i></li>
                                        <li><i class="fa fa-star "></i></li>
                                        <li><i class="fa fa-star "></i></li>
                                        <li><i class="fa fa-star "></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="thumb ">
                                    <div class="hover-content ">

                                    </div>
                                    <img src="hms/assets/images/bedsitters4.png " alt=" ">
                                </div>
                                <div class="down-content ">
                                    <h4>Bedsitter 4</h4>
                                    <span>12000.00 per Sem</span>
                                    <ul class="stars ">
                                        <li><i class="fa fa-star "></i></li>
                                        <li><i class="fa fa-star "></i></li>
                                        <li><i class="fa fa-star "></i></li>
                                        <li><i class="fa fa-star "></i></li>
                                        <li><i class="fa fa-star "></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="thumb ">
                                    <div class="hover-content ">

                                    </div>
                                    <img src="hms/assets/images/bedsitters1.png " alt=" ">
                                </div>
                                <div class="down-content ">
                                    <h4>Bed sitter 6</h4>
                                    <span>Ksh 20000.00 Per Sem</span>
                                    <ul class="stars ">
                                        <li><i class="fa fa-star "></i></li>
                                        <li><i class="fa fa-star "></i></li>
                                        <li><i class="fa fa-star "></i></li>
                                        <li><i class="fa fa-star "></i></li>
                                        <li><i class="fa fa-star "></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
