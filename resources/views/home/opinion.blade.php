<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>P7House| Evaluation</title>
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
    <link href="../assets1/css/Evaluation.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="../assets1/css/CssHome.css" rel="stylesheet">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <![endif]-->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        .containBody{
            display: grid;
            height: 100%;
            place-items: center;
            text-align: center;
            background: white;
        }
        .slider{
            max-width: 900px;
            display: flex;
        }
        .slider .card{
            flex: 1;
            margin: 0 10px;
            background: whitesmoke;
        }
        .slider .card .img{
            height: 200px;
            width: 100%;
        }
        .slider .card .img img{
            height: 100%;
            width: 100%;
            object-fit: cover;
        }
        .slider .card .content{
            padding: 10px 20px;
        }
        .card .content .title{
            font-size: 25px;
            font-weight: 600;
        }
        .card .content .sub-title{
            font-size: 20px;
            font-weight: 600;
            color: #e74c3c;
            line-height: 20px;
        }
        .card .content p{
            text-align: justify;
            margin: 10px 0;
        }
        .card .content .btn{
            display: block;
            text-align: left;
            margin: 10px 0;
        }
        .card .content .btn button{
            background: #e74c3c;
            color: #fff;
            border: none;
            outline: none;
            font-size: 17px;
            padding: 5px 8px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.2s;
        }
        .card .content .btn button:hover{
            transform: scale(0.9);
        }

    </style>

</head>
<body>
@if(session('opinion'))
    <div class="alert ">
        <span class="msg">{{session('opinion')}}</span>
        <div class="close-btn">
            <span class="fa fa-check"></span>
        </div>
    </div>
@endif
@if(session('deleteOpinion'))
    <div class="alert ">
        <span class="msg">{{session('deleteOpinion')}}</span>
        <div class="close-btn">
            <span class="fa fa-check"></span>
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

<!-- Start Proerty header  -->

<section id="aa-property-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-property-header-inner">
                    <h2>Opinions Client </h2>
                    <ol class="breadcrumb">
                        <li><a>HOME</a></li>
                        <li><a>PROPERTIES</a></li>
                        <li><a>Opinions</a></li>
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
                        <h2>Opinions Clients</h2>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi commodi eum dolorem aut eos, debitis quaerat reiciendis, officiis consectetur ducimus atque suscipit ab at tempora!</p>
                    </div>

                    <!-- Start gallery -->
                    <div class="aa-gallery-content">
                        <div class="containBody">
                            <div class="slider owl-carousel">
                                @foreach($opinion as $data)
                                <div class="card">
                                    <div class="img">
                                        <img src="{{ asset('loads/'.$data->image) }}" alt="User"></div>
                                    <div class="content">
                                        <div class="title">
                                            {{$data->name}}</div>
                                        <div class="sub-title">
                                            {{$data->siteUser}}</div>
                                        <p>{{$data->opinion}}.</p>
                                        @if(\Illuminate\Support\Facades\Auth::user()->id == $data->idUser)
                                        <div class="btn">
                                            <a href="/Opinion_User_Delete/{{$data->id}}/{{$data->idHouse}}"><button style="float: right"><i class="glyphicon glyphicon-trash" style="font-size: 5px"></i></button></a>
                                        </div>
                                            @endif
                                    </div>
                                </div>
                               @endforeach
                            </div>
                            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
                            <script>
                                $(".slider").owlCarousel({
                                    loop: true,
                                    autoplay: true,
                                    autoplayTimeout: 1000, //2000ms = 2s;
                                    autoplayHoverPause: true,
                                });
                            </script>
                        </div>

                        <h3>Write Opinion</h3>
                        <div class="card-body">

                            <form action="" method="post">
                                @csrf
                                <textarea class="form-control" name="opinion" style="height: 200px;max-width: 1200px" required></textarea>
                                <br>
                                <button class="btn btn-success">Send</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

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

