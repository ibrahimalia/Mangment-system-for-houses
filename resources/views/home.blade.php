<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>P7House | Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets1/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
    <link href="../assets1/css/CssHomeNote.css" rel="stylesheet">
    <!-- Main style sheet -->
    <link href="../assets1/css/style.css" rel="stylesheet">
    <link href="../assets1/css/CssHome.css" rel="stylesheet">
    <link href="../assets1/css/CssAutoComplete.css" rel="stylesheet">
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
    <!--  Button in loop  style-->
    <style>
        #ShowImage{
            background-color:#59abe3;  text-align: center;color: white;padding: 5px;font-size:15px;transition: 0.5s;
        }

        #ShowImage:hover {
            background-color: black;
            color: whitesmoke;

        }
    </style>

</head>
<body class="aa-price-range">
@if(session('card'))
    <div class="alert ">
        <span class="msg">{{session('card')}}</span>
        <div class="close-btn">
            <span class="fas fa-check"></span>
        </div>
    </div>
@endif
@if(session('add'))
    <div class="alert ">
        <span class="msg">{{session('add')}}</span>
        <div class="close-btn">
            <span class="fas fa-check"></span>
        </div>
    </div>
@endif
@if(session('eval'))
    <div class="alert ">
        <span class="msg">{{session('eval')}}</span>
        <div class="close-btn">
            <span class="fas fa-check"></span>
        </div>
    </div>
@endif

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
<!-- Start Note  -->

<div class="note">
    <img src="../assets1/img/evaluation/emoji5.jpg" alt="">
    <div class="content">
        <h3>Hello in P7House</h3>
        <p>Thanks you for register in website and team P7House hope you a good experience.</p>
        <div class="buttons">
            <button class="item">Close</button>
        </div>
    </div>
</div>
<!-- End Note  -->

<!-- Start slider  -->
<section id="aa-slider">
    <div class="aa-slider-area">
        <!-- Top slider -->
        <div class="aa-top-slider">
            <!-- Top slider single slide -->
            <div class="aa-top-slider-single">
                <img src="../assets1/img/slider/1.jpg" alt="img">
                <!-- Top slider content -->
                <!-- / Top slider content -->
            </div>
            <!-- / Top slider single slide -->
            <!-- Top slider single slide -->
            <div class="aa-top-slider-single">
                <img src="../assets1/img/slider/2.jpg" alt="img">
                <!-- Top slider content -->
                <!-- / Top slider content -->
            </div>
            <!-- / Top slider single slide -->
            <!-- Top slider single slide -->
            <div class="aa-top-slider-single">
                <img src="../assets1/img/slider/3.jpg" alt="img">
                <!-- Top slider content -->
                <!-- / Top slider content -->
            </div>
            <!-- / Top slider single slide -->
            <!-- Top slider single slide -->
            <div class="aa-top-slider-single">
                <img src="../assets1/img/slider/5.jpg" alt="img">
                <!-- Top slider content -->
                <!-- / Top slider content -->
            </div>
            <!-- / Top slider single slide -->
            <!-- Top slider single slide -->
            <div class="aa-top-slider-single">
                <img src="../assets1/img/slider/4.jpg" alt="img">
                <!-- Top slider content -->
                <!-- / Top slider content -->
            </div>
            <!-- / Top slider single slide -->
            <!-- Top slider single slide -->
            <div class="aa-top-slider-single">
                <img src="../assets1/img/slider/6.jpg" alt="img">
                <!-- Top slider content -->

                <!-- / Top slider content -->
            </div>
            <!-- / Top slider single slide -->
        </div>
    </div>
</section>
<!-- End slider  -->

<!-- Advance Search -->
<section id="aa-advance-search">
    <div class="container">
        <div class="aa-advance-search-area">
            <form class="form-inline" action="" method="post">
                @csrf
            <div class="form">
                <div class="aa-advance-search-top">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="aa-single-advance-search autocomplete " >
                                <input id="myInput" class="form-control" type="text" name="governorate" placeholder=" Enter Location" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="aa-single-advance-search">
                                <select class="form-control" name="categoryHouse" required>
                                    <option>sell</option>
                                    <option>rent</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="aa-single-advance-search">
                                <select class="form-control" name="typeHouse" required>
                                    <option>flat</option>
                                    <option>land</option>
                                    <option>Villa</option>
                                    <option>palace</option>
                                    <option>office</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="aa-single-advance-search">
                                <input type="number" style="height: 40px;font-size: 17px" class="form-control" min="0" placeholder=" Room Number" name="roomNumber" required>

                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="aa-single-advance-search">
                                <input class="aa-search-btn" type="submit" value="Search">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aa-advance-search-bottom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="aa-single-filter-search">
                                <span>Price (SYR Bounds)</span>
                                <span>FROM</span>
                                <input id="skip-value-lower" name="lower" class="example-val form-control" type="number" min="0" value="" required />
                                <span>TO</span>
                                <input id="skip-value-upper" name="upper" class="example-val form-control" type="number" min="0" value="" required />

                                <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>

        </div>
    </div>
</section>
<!-- / Advance Search -->
<!-- Latest property -->
<section id="aa-latest-property">
    <div class="container">
        <div class="aa-latest-property-area">
            <div class="aa-title">
                <h2>Latest Properties</h2>
                <span></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
            </div>
            <div class="aa-latest-properties-content">
                <div class="row">
                    <!-- Start loop -->
                    @foreach($d as $property)
                    <div class="col-md-4">
                                <article class="aa-properties-item">
                                    <a class="aa-properties-item-img" href="#">
                                        <img alt="img" src="{{ asset('mainImage/' . $property->mainImage) }}">
                                    </a>
                                    <div class="aa-tag for-sale">
                                        ___>{{$property->categoryHouse}}
                                    </div>
                                    <div class="aa-tag sold-out">
                                      <strong>VIP</strong>
                                    </div>

                                    <div class="aa-properties-item-content">
                                        <div class="aa-properties-info" style="background: rgba(199,239,236,0.13) ">
                                            <span style="background: red" class="badge">{{$property->reserve}}</span><hr>
                                            <span >{{$property->roomNumber}} Rooms</span>
                                            <span >{{$property->bathroom}} Baths</span>
                                            <span style="color:rgba(229,249,44,0.84)" class="fas fa-star"></span>
                                            <span >{{$property->rate}}</span>

                                        </div>
                                        <div class="aa-properties-about">
                                            <h3><a> {{$property->nameHouse}}</a></h3>
                                            <hr>
                                            <strong>Site House</strong>
                                            <p>{{$property->site}}</p>
                                            <strong>Price House</strong><br>
                                            <span class="aa-price">
                                                @if($property->typePrice == null)
                                                {{$property->price}} ل.س
                                                    @else
                                                    <p>اتصل مع صاحب العقار لمعرفة السعر</p>
                                                @endif
                                                </span>
                                        </div>
                                        <div class="aa-properties-detial">

                                            <a id="ShowImage" href="/gallery/{{$property->id}}" class=" aa-price"  >
                                                Show Image
                                            </a>
                                            <a class="aa-secondary-btn" href="/properties Details/{{$property->id}}">View Details</a>
                                        </div>
                                    </div>
                                </article>
                    </div>
                @endforeach
                <!-- End loop -->


                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Latest property -->

<!-- Service section -->
<section id="aa-service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-service-area">
                    <div class="aa-title">
                        <h2>Our Service</h2>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
                    </div>
                    <!-- service content -->
                    <div class="aa-service-content">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="aa-single-service">
                                    <div class="aa-service-icon">
                                        <span class="fa fa-home"></span>
                                    </div>
                                    <div class="aa-single-service-content">
                                        <h4><a href="#">Property Sale</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="aa-single-service">
                                    <div class="aa-service-icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="aa-single-service-content">
                                        <h4><a href="#">Property Rent</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="aa-single-service">
                                    <div class="aa-service-icon">
                                        <span class="fa fa-crosshairs"></span>
                                    </div>
                                    <div class="aa-single-service-content">
                                        <h4><a href="#">Property Development</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="aa-single-service">
                                    <div class="aa-service-icon">
                                        <span class="fa fa-bar-chart-o"></span>
                                    </div>
                                    <div class="aa-single-service-content">
                                        <h4><a href="#">Marketing</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Service section -->


<!-- Our Agent Section-->
<section id="aa-agents">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-agents-area">
                    <div class="aa-title">
                        <h2>Our Agents</h2>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
                    </div>
                    <!-- agents content -->
                    <div class="aa-agents-content">
                        <ul class="aa-agents-slider">
                            <li>
                                <div class="aa-single-agents">
                                    <div class="aa-agents-img">
                                        <img src="../assets1/img/agents/agent-1.png" alt="agent member image">
                                    </div>
                                    <div class="aa-agetns-info">
                                        <h4><a href="#">Philip Smith</a></h4>
                                        <span>Top Agent</span>
                                        <div class="aa-agent-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="aa-single-agents">
                                    <div class="aa-agents-img">
                                        <img src="../assets1/img/agents/agent-5.png" alt="agent member image">
                                    </div>
                                    <div class="aa-agetns-info">
                                        <h4><a href="#">Adam Barney</a></h4>
                                        <span>Expert Agent</span>
                                        <div class="aa-agent-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="aa-single-agents">
                                    <div class="aa-agents-img">
                                        <img src="../assets1/img/agents/agent-3.png" alt="agent member image">
                                    </div>
                                    <div class="aa-agetns-info">
                                        <h4><a href="#">Paul Walker</a></h4>
                                        <span>Director</span>
                                        <div class="aa-agent-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="aa-single-agents">
                                    <div class="aa-agents-img">
                                        <img src="../assets1/img/agents/agent-4.png" alt="agent member image">
                                    </div>
                                    <div class="aa-agetns-info">
                                        <h4><a href="#">John Smith</a></h4>
                                        <span>Jr. Agent</span>
                                        <div class="aa-agent-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="aa-single-agents">
                                    <div class="aa-agents-img">
                                        <img src="../assets1/img/agents/agent-1.png" alt="agent member image">
                                    </div>
                                    <div class="aa-agetns-info">
                                        <h4><a href="#">Philip Smith</a></h4>
                                        <span>Top Agent</span>
                                        <div class="aa-agent-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="aa-single-agents">
                                    <div class="aa-agents-img">
                                        <img src="../assets1/img/agents/agent-5.png" alt="agent member image">
                                    </div>
                                    <div class="aa-agetns-info">
                                        <h4><a href="#">Adam Barney</a></h4>
                                        <span>Expert Agent</span>
                                        <div class="aa-agent-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="aa-single-agents">
                                    <div class="aa-agents-img">
                                        <img src="../assets1/img/agents/agent-3.png" alt="agent member image">
                                    </div>
                                    <div class="aa-agetns-info">
                                        <h4><a href="#">Paul Walker</a></h4>
                                        <span>Director</span>
                                        <div class="aa-agent-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="aa-single-agents">
                                    <div class="aa-agents-img">
                                        <img src="../assets1/img/agents/agent-4.png" alt="agent member image">
                                    </div>
                                    <div class="aa-agetns-info">
                                        <h4><a href="#">John Smith</a></h4>
                                        <span>Jr. Agent</span>
                                        <div class="aa-agent-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Our Agent Section-->

<!-- Client Testimonial -->
<section id="aa-client-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-client-testimonial-area">
                    <div class="aa-title">
                        <h2>What Client Say</h2>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus eaque quas debitis animi ipsum, veritatis!</p>
                    </div>
                    <!-- testimonial content -->
                    <div class="aa-testimonial-content">
                        <!-- testimonial slider -->
                        <ul class="aa-testimonial-slider">
                            <li>
                                <div class="aa-testimonial-single">
                                    <div class="aa-testimonial-img">
                                        <img src="../assets1/img/testimonial-1.png" alt="testimonial img">
                                    </div>
                                    <div class="aa-testimonial-info">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                                    </div>
                                    <div class="aa-testimonial-bio">
                                        <p>David Muller</p>
                                        <span>Web Designer</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="aa-testimonial-single">
                                    <div class="aa-testimonial-img">
                                        <img src="../assets1/img/testimonial-3.png" alt="testimonial img">
                                    </div>
                                    <div class="aa-testimonial-info">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                                    </div>
                                    <div class="aa-testimonial-bio">
                                        <p>David Muller</p>
                                        <span>Web Designer</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="aa-testimonial-single">
                                    <div class="aa-testimonial-img">
                                        <img src="../assets1/img/testimonial-2.png" alt="testimonial img">
                                    </div>
                                    <div class="aa-testimonial-info">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                                    </div>
                                    <div class="aa-testimonial-bio">
                                        <p>David Muller</p>
                                        <span>Web Designer</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client Testimonial -->

<!-- Client brand -->
<section id="aa-client-brand">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-client-brand-area">
                    <ul class="aa-client-brand-slider">
                        <li>
                            <div class="aa-client-single-brand">
                                <img src="../assets1/img/client-brand-1.png" alt="brand image">
                            </div>
                        </li>
                        <li>
                            <div class="aa-client-single-brand">
                                <img src="../assets1/img/client-brand-2.png" alt="brand image">
                            </div>
                        </li>
                        <li>
                            <div class="aa-client-single-brand">
                                <img src="../assets1/img/client-brand-3.png" alt="brand image">
                            </div>
                        </li>
                        <li>
                            <div class="aa-client-single-brand">
                                <img src="../assets1/img/client-brand-5.png" alt="brand image">
                            </div>
                        </li>
                        <li>
                            <div class="aa-client-single-brand">
                                <img src="../assets1/img/client-brand-4.png" alt="brand image">
                            </div>
                        </li>
                        <li>
                            <div class="aa-client-single-brand">
                                <img src="../assets1/img/client-brand-1.png" alt="brand image">
                            </div>
                        </li>
                        <li>
                            <div class="aa-client-single-brand">
                                <img src="img/client-brand-2.png" alt="brand image">
                            </div>
                        </li>
                        <li>
                            <div class="aa-client-single-brand">
                                <img src="../assets1/img/client-brand-3.png" alt="brand image">
                            </div>
                        </li>
                        <li>
                            <div class="aa-client-single-brand">
                                <img src="../assets1/img/client-brand-5.png" alt="brand image">
                            </div>
                        </li>
                        <li>
                            <div class="aa-client-single-brand">
                                <img src="../assets1/img/client-brand-4.png" alt="brand image">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Client brand -->

<!-- Latest blog -->
<section id="aa-latest-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-latest-blog-area">
                    <div class="aa-title">
                        <h2>Latest News</h2>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe magni, est harum repellendus. Accusantium, nostrum!</p>
                    </div>
                    <div class="aa-latest-blog-content">
                        <div class="row">
                            <!-- start single blog -->
                            <div class="col-md-4">
                                <article class="aa-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="../assets1/img/blog-img-1.jpg" alt="img"></a>
                                        <span class="aa-date-tag">15 April, 16</span>
                                    </figure>
                                    <div class="aa-blog-single-content">
                                        <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                                        <div class="aa-blog-single-bottom">
                                            <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                                            <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                                        </div>
                                    </div>

                                </article>
                            </div>
                            <!-- start single blog -->
                            <div class="col-md-4">
                                <article class="aa-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="../assets1/img/blog-img-2.jpg" alt="img"></a>
                                        <span class="aa-date-tag">15 April, 16</span>
                                    </figure>
                                    <div class="aa-blog-single-content">
                                        <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                                        <div class="aa-blog-single-bottom">
                                            <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                                            <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- start single blog -->
                            <div class="col-md-4">
                                <article class="aa-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="../assets1/img/blog-img-3.jpg" alt="img"></a>
                                        <span class="aa-date-tag">15 April, 16</span>
                                    </figure>
                                    <div class="aa-blog-single-content">
                                        <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                                        <div class="aa-blog-single-bottom">
                                            <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                                            <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Latest blog -->

<!-- Start part connection on wireless

<div class="bodies">
    <div class="wrapper">
        <div class="toast">
            <div class="content">
                <div class="icon"><i class="uil uil-wifi"></i></div>
                <div class="details">
                    <span>You're online now</span>
                    <p> Internet is connected.</p>
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
<script src="../assets1/js/JsHome.js"></script>

<!-- For button in Note  -->
<script>
    const cookieBox = document.querySelector(".note"),
        acceptBtn = cookieBox.querySelector("button");
    acceptBtn.onclick = ()=>{
        cookieBox.classList.add("hide"); //hide cookie box
    }

</script>
<!-- For alert -->
<script>
    setTimeout(function(){
        $('.alert').removeClass("show");
        $('.alert').addClass("hide");
    },5500);

    $('.close-btn').click(function(){
        $('.alert').removeClass("show");
        $('.alert').addClass("hide");
    });
</script>
<!-- End  -->
</body>
</html>
