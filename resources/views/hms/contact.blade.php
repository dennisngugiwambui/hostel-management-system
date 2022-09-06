@extends('hms.app')

@section('content')
    <!-- ***** Contact Area Starts ***** -->
    <div class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/dir//Chuka/@-0.322865,37.6546274,11z/data=!4m8!4m7!1m0!1m5!1m1!1s0x1827b87d15133c4b:0x989bec815b0252c5!2m2!1d37.6546274!2d-0.322865" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <!-- You can simply copy and paste "Embed a map" code from Google Maps for any location. -->

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Feel free to message us</h2>
                        <span></span>
                    </div>
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input name="email" type="text" id="email" placeholder="Your email" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" id="message" placeholder="Your message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    <div class="col-lg-4">
        <div class="row">
            <div class="col-6">
                <ul>
                    <li>Hostel Location:<br><span>Ndagani,Chuka</span></li>
                    <li>Phone:<br><span>074456788</span></li>
                    <li>Email<br><span>Justo@gamil.com</span></li>
                </ul>
            </div>
            <div class="col-6">

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->
@endsection
