<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>P7House| Gallery</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets1/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="../assets1/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../assets1/css/bootstrap.css" rel="stylesheet">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="../assets1/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="../assets1/css/nouislider.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="../assets1/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="../assets1/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="../assets1/css/style.css" rel="stylesheet">
    <link href="../assets1/css/CssHome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <![endif]-->


</head>
<body>

<!-- Pre Loader -->
<div id="aa-preloader-area">
    <div class="pulse"></div>
</div>
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
<!-- END SCROLL TOP BUTTON -->
<!-- Start menu section -->
<section id="aa-menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!-- Text based logo -->
                <a class="navbar-brand aa-logo" href="#">P<strong>7</strong>House <span STYLE="color: chartreuse">.COM</span> </a>
                <!-- Image based logo -->
                <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
                    <li><a href="/home" >HOME</a></li>
                    <li><a href="/contact">CONTACT</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">Review <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="blog-archive.html">Review</a></li>
                            <li><a href="/card">Card</a></li>
                        </ul>
                    </li>
                    <li><a href="/add"> News</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html"><img src="{{ asset('loads/' . \Illuminate\Support\Facades\Auth::user()->image) }}" alt="image" style="width:30px;height:30px;border-radius: 30px"> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/My_Profile">My Profile</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</section>
<!-- End menu section -->

<!-- Start Proerty header  -->

<section id="aa-property-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-property-header-inner">
                    <h2>Properties Details</h2>
                    <ol class="breadcrumb">
                        <li><a>HOME</a></li>
                        <li><a>PROPERTIES</a></li>
                        <li><a>Gallery</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Proerty header  -->

<section id="aa-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-gallery-area">
                    <div class="aa-title">
                        <h2>Gallery View</h2>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi commodi eum dolorem aut eos, debitis quaerat reiciendis, officiis consectetur ducimus atque suscipit ab at tempora!</p>
                    </div>

                    <!-- Start gallery -->
                    <div class="aa-gallery-content">
                        <div class="aa-gallery-top">
                            <!-- Start gallery menu -->
                            <ul>
                                <li data-filter="all" class="filter active">All</li>
                                <li data-filter=".apartment" class="filter">Apartment</li>
                                <li data-filter=".livingroom" class="filter">Living Room</li>
                                <li data-filter=".bedroom" class="filter">Bedroom</li>
                                <li data-filter=".kitchen" class="filter">Kitchen</li>
                                <li data-filter=".garage" class="filter">Garage</li>
                            </ul>
                        </div>
                        <!-- Start gallery image -->
                        <div id="mixit-container" class="aa-gallery-body">
                            <!-- start single gallery image apartment-->
                            @foreach($detail as $d)
                                    <?php
                                    /** @var TYPE_NAME $d */
                                    foreach (explode(',',$d->apartmentImage)as $y) {?>
                            <div class="aa-single-gallery mix apartment">
                                        <div class="aa-single-gallery-item">
                                        <div class="aa-single-gallery-img">
                                            <img src="{{ asset('apartmentImage/' . $y) }}" alt="image" >
                                        </div>
                                        <div class="aa-single-gallery-info">
                                            <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('apartmentImage/' . $y) }}"><span class="fa fa-eye">
                                            <a class="aa-link" ><span class="fa fa-link"></span></a>
                                        </div>
                                        </div>
                            </div>
                                    <?php   } ?>
                            @endforeach

                            @foreach($detail as $d)
                                <?php
                                /** @var TYPE_NAME $d */
                                foreach (explode(',',$d->garageImage)as $y) {?>
                                <div class="aa-single-gallery mix garage">
                                    <div class="aa-single-gallery-item">
                                        <div class="aa-single-gallery-img">
                                            <img src="{{ asset('garageImage/' . $y) }}" alt="image" >
                                        </div>
                                        <div class="aa-single-gallery-info">
                                            <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('garageImage/' . $y) }}"><span class="fa fa-eye"></span></a>
                                            <a class="aa-link" ><span class="fa fa-link"></span></a>
                                        </div>

                                     </div>
                                  </div>

                                    <?php } ?>
                                @endforeach

                            @foreach($detail as $d)
                                <?php
                                /** @var TYPE_NAME $d */
                                foreach (explode(',',$d->livingRoomImage)as $y) {?>
                            <div class="aa-single-gallery mix livingroom">
                                <div class="aa-single-gallery-item">
                                    <div class="aa-single-gallery-img">
                                        <img src="{{ asset('livingRoomImage/' . $y) }}" alt="image" >
                                    </div>
                                    <div class="aa-single-gallery-info">
                                        <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('livingRoomImage/' . $y) }}"><span class="fa fa-eye">
                                             <a class="aa-link" href="#"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                                <?php } ?>
                           @endforeach
                        <!-- start single gallery image bedroom-->
                        @foreach($detail as $d)
                            <?php
                            /** @var TYPE_NAME $d */
                            foreach (explode(',',$d->bedRoomImage)as $y) {?>
                            <div class="aa-single-gallery mix bedroom">
                                <div class="aa-single-gallery-item">
                                    <div class="aa-single-gallery-img">
                                        <img src="{{ asset('bedRoomImage/' . $y) }}" alt="image" >
                                    </div>
                                    <div class="aa-single-gallery-info">
                                        <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('bedRoomImage/' . $y) }}"><span class="fa fa-eye">
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        @endforeach

                            <!-- start single gallery image kitchen-->
                            @foreach($detail as $d)
                                <?php
                                /** @var TYPE_NAME $d */
                                foreach (explode(',',$d->kitchenImage)as $y) {?>
                            <div class="aa-single-gallery mix kitchen">
                                <div class="aa-single-gallery-item">
                                    <div class="aa-single-gallery-img">
                                        <img src="{{ asset('kitchenImage/' . $y) }}" alt="image" >
                                    </div>
                                    <div class="aa-single-gallery-info">
                                        <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('kitchenImage/' . $y) }}"><span class="fa fa-eye">
                                    </div>
                                </div>
                            </div>
                                    <?php } ?>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start part connection on wireless

<div class="bodies">
    <div class="wrapper">
        <div class="toast">
            <div class="content">
                <div class="icon"><i class="uil uil-wifi"></i></div>
                <div class="details">
                    <span>You're online now</span>
                    <p>Hurray! Internet is connected.</p>
                </div>
            </div>
            <div class="close-icon"><i class="uil uil-times"></i></div>
        </div>
    </div>
</div>
 -->
<!-- Footer -->
<footer id="aa-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-footer-area">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="aa-footer-left">
                                <p>Designed by <a rel="nofollow" href="http://www.markups.io/">MarkUps.io</a></p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="aa-footer-middle">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="aa-footer-right">
                                <a href="#">Home</a>
                                <a href="#">Support</a>
                                <a href="#">License</a>
                                <a href="#">FAQ</a>
                                <a href="#">Privacy & Term</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / Footer -->

<!-- jQuery library -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<script src="../assets1/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../assets1/js/bootstrap.js"></script>
<!-- slick slider -->
<script type="text/javascript" src="../assets1/js/slick.js"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="../assets1/js/nouislider.js"></script>
<!-- mixit slider -->
<script type="text/javascript" src="../assets1/js/jquery.mixitup.js"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="../assets1/js/jquery.fancybox.pack.js"></script>
<!-- Custom js -->
<script src="../assets1/js/custom.js"></script>



</body>
</html>
