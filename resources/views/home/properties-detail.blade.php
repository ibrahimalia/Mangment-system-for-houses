<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> P7House | Properties Details</title>

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
<body class="aa-price-range" >
@if(session('reverse'))
    <div class="alert ">
        <span class="msg">{{session('reverse')}}</span>
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
                    <h2>Properties Details</h2>
                    <ol class="breadcrumb">
                        <li><a>HOME</a></li>
                        <li><a>PROPERTIES</a></li>
                        <li><a>PROPERTIES Details</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Proerty header  -->

<!-- Start Properties  -->
<section id="aa-properties" >
    <div class="container" id="map">
        <div class="row">
            @foreach($detail as $d)
            <div class="col-md-8">
                <div class="aa-properties-content">
                    <!-- Start properties content body -->
                    <div class="aa-properties-details">
                        <div class="aa-properties-details-img">
                            <?php
                            /** @var TYPE_NAME $d */
                            foreach (explode(',',$d->apartmentImage)as $y) {?>
                            <img src="{{ asset('apartmentImage/' . $y) }}" alt="image" >
                            <?php   } ?>
                        </div>
                        <div class="aa-properties-info">
                            <h2>{{$d->nameHouse}}</h2>
                            <h4>{{$d->site}}</h4>
                            <span>
                            @if($d->typePrice == null)
                                {{$d->price}} ل.س
                            @else
                                <strong>صاحب العقار اختار اخفاء السعر لمعرفة السعر والتفاوض عليه اتصل على الرقم الموجود في الاسفل </strong>
                            @endif
                            </span>
                            <h4>Property Features</h4>
                            <input type="text" name="test" value="{{$d->reserve}}" class="hidden">
                            <input type="text" name="test2" value="{{$show}}" class="hidden">
                            {{$d->description}}
                            <h4>Exists in house :</h4>
                            <ul>
                                <li>{{$d->roomNumber}} Room Number</li>
                                <li>{{$d->bathroom}} Baths</li>
                            </ul>
                            <ul>
                                <li>{{$d->phone}} phone Number to acess the owner of the house</li>
                            </ul>
                            <h4>Home Reviews</h4>
                            To Show Details reviews and evaluate please click on anything....<br><br>
                            <a class="aa-secondary-btn" href="/Review/{{$d->id}}" style="font-size: 10px" > Home</a>
                            @if($d->idUser != \Illuminate\Support\Facades\Auth::user()->id)
                            <a class="aa-secondary-btn" href="/Review_User/{{$d->idUser}}" style="font-size: 10px"> User</a>
                            @endif
                            @if($d->idUser != \Illuminate\Support\Facades\Auth::user()->id)
                            <a class="aa-secondary-btn" href="/Evaluate_User/{{$d->idUser}}" style="font-size: 10px">Evaluate user</a>
                            @endif
                            <a class="aa-secondary-btn" href="/Opinion_User/{{$d->id}}" style="font-size: 10px" > Opinions</a>
                            <h4>Property Map</h4>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6851.201919469417!2d-86.11773906635584!3d33.47324776828677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888bdb60cc49c571%3A0x40451ca6baf275c7!2s36008+AL-77%2C+Talladega%2C+AL+35160%2C+USA!5e0!3m2!1sbn!2sbd!4v1460452919256" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <!-- Properties social share -->
                        <div class="aa-properties-social">
                            <ul>
                                <li>Share</li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
            <!-- Start properties sidebar -->
                <div class="col-md-4">
                    <aside class="aa-properties-sidebar">
                        <!-- Start Single properties sidebar -->
                        <div class="aa-properties-single-sidebar">
                            <h3> Information Reversing</h3>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="../assets1/img/item/1.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">This is Title</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <span>$65000</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="../assets1/img/item/1.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">This is Title</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <span>$65000</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="../assets1/img/item/1.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">This is Title</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <span>$65000</span>
                                </div>
                            </div>
                        </div>
                        <!-- Start Single properties sidebar -->
                        <div class="aa-properties-single-sidebar">
                            <form action="" class="aa-sort-form" method="post">
                                @csrf
                                <input type="number"  class="form-control hidden"  value="{{$id}}" name="idHouse" required>
                                <div class="aa-single-advance-search" v-bind:style="elementVisible">
                                    <input type="submit" value="Reverse Now" class="aa-search-btn" v-bind:style="className" >
                                </div>
                            </form>
                        </div>
                    </aside>
                </div>
        </div>
    </div>
</section>
<!-- / Properties  -->
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


<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script type="text/javascript">
    new Vue({
        el:'#map',
        data:{
            x:document.querySelector("input[name=test]").value,
            y:document.querySelector("input[name=test2]").value,
            unshow:'display:none',
            show:''

        },
        computed:{
            'className':function () {
                if (this.x =='reverse now'){
                    return this.unshow;
                }else {

                    return this.show;
                }
            },
            'elementVisible':function () {
                if (this.y == 0){
                    return this.show;
                }else {

                    return this.unshow;
                }
            }

        }
    });
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

