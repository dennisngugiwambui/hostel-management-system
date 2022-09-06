<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>JM HOSTELS</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="hms/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="hms/assets/css/font-awesome.css">

    <link rel="stylesheet" href="hms/assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="hms/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="hms/assets/css/lightbox.css">
    <!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
             @include('hms.navbar')
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

@yield('content')
<!-- ***** Bedsitters Area Ends ***** -->

<!-- ***** Footer Start ***** -->
<footer>
    <div class="container ">
        <div class="row ">
            <div class="col-lg-3 ">
                <div class="first-item ">
                    <div class="logo ">
                        <img src="hms/assets/images/hostel logo.png " alt="hexashop ecommerce templatemo ">
                    </div>
                    <ul>
                        <li><a href="# ">Justin Mwareri</a></li>
                        <li><a href="# ">justin@gmail.com</a></li>
                        <li><a href="# ">0711828789</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 ">
                <h4>Hostel-Rooms &amp; Categories</h4>
                <ul>
                    <li><a href="# ">Single room</a></li>
                    <li><a href="# ">Bedsitters</a></li>

                </ul>
            </div>
            <div class="col-lg-3 ">

                <div class="col-lg-12 ">
                    <div class="under-footer ">
                        <p>Copyright © 2022 justin . All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



<!-- jQuery -->
<script src="hms/assets/js/jquery-2.1.0.min.js "></script>

<!-- Bootstrap -->
<script src="hms/assets/js/popper.js "></script>
<script src="hms/assets/js/bootstrap.min.js "></script>

<!-- Plugins -->
<script src="hms/assets/js/owl-carousel.js "></script>
<script src="hms/assets/js/accordions.js "></script>
<script src="hms/assets/js/datepicker.js "></script>
<script src="hms/assets/js/scrollreveal.min.js "></script>
<script src="hms/assets/js/waypoints.min.js "></script>
<script src="hms/assets/js/jquery.counterup.min.js "></script>
<script src="hms/assets/js/imgfix.min.js "></script>
<script src="hms/assets/js/slick.js "></script>
<script src="hms/assets/js/lightbox.js "></script>
<script src="hms/assets/js/isotope.js "></script>

<!-- Global Init -->
<script src="hms/assets/js/custom.js "></script>

<script>
    $(function() {
        var selectedClass = " ";
        $("p ").click(function() {
            selectedClass = $(this).attr("data-rel ");
            $("#portfolio ").fadeTo(50, 0.1);
            $("#portfolio div ").not(". " + selectedClass).fadeOut();
            setTimeout(function() {
                $(". " + selectedClass).fadeIn();
                $("#portfolio ").fadeTo(50, 1);
            }, 500);

        });
    });
</script>

</body>

</html>
