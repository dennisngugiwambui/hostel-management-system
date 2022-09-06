@extends('hms.app')

@section('content')

    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Hostels</h2>
                        <span>Check out all of our Hostels.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="/login"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="/login"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <img src="hms/assets/images/HostelF.jfif" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Hostel 1</h4>
                            <span></span>
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
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="/login"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="/login"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <img src="hms/assets/images/HostelF.jfif" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Hostel 2</h4>
                            <span></span>
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
                @foreach($hostel as $hostels)
                    <div class="col-lg-4">
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="/login"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="/login"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <img src="imagename/{{$hostels->image}}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Hostel 2</h4>
                                <span></span>
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
                @endforeach
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="/login"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="/login"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <img src="hms/assets/images/HostelF.jfif" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Hostel 3</h4>
                            <span></span>
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
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">

                            </div>
                            <img src="hms/assets/images/HostelF.jfif" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Hostel 4</h4>
                            <span></span>
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
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="/login"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="/login"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <img src="hms/assets/images/HostelF.jfif" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Hostel 5</h4>
                            <span></span>
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
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="/login"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="/login"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <img src="hms/assets/images/HostelF.jfif" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Hostel 6</h4>
                            <span></span>
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
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="/login"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="/login"><i class="fa fa-star"></i></a></li>
                                    <li><a href="/login"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="hms/assets/images/HostelF.jfif" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Hostel 7</h4>
                            <span></span>
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
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="/login"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="/login"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <img src="hms/assets/images/HostelF.jfif" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Hostel 7</h4>
                            <span></span>
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
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="/login"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="/login"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <img src="hms/assets/images/HostelF.jfif" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Hostel 8</h4>
                            <span></span>
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
                <div class="col-lg-12">
                    <div class="pagination">
                        <ul>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="active">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->

@endsection
