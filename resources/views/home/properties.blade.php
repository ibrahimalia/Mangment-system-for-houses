<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> P7House | Properties</title>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        #ShowImage{
            background-color:#59abe3;  text-align: center;color: white;padding: 5px;font-size:15px;transition: 0.5s;
        }

        #ShowImage:hover {
            background-color: black;
            color: whitesmoke;

        }
        .coll{
            grid-template-columns: repeat(auto-fit, minmax(333.33px, 1fr));
            display: none;
        }
        #load{
            background-color:darkred;  text-align: -webkit-center;color: white;padding: 5px;font-size:15px;transition: 0.5s;
             cursor: pointer; position:center;width:600px;float: right;
        }
        #ShowImage:hover {
            background-color: black;
            color: whitesmoke;

        }
    </style>

</head>
<body class="aa-price-range">
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
                    <h2>Properties Page</h2>
                    <ol class="breadcrumb">
                        <li><a>HOME</a></li>
                        <li class="active">PROPERTIES</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Proerty header  -->

<!-- Start Properties  -->
<section id="aa-properties" >
    <f class="container" id="map">
        <form action="" class="aa-sort-form" method="post">
            @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="aa-properties-content">
                    <!-- start properties content head -->
                    <div class="aa-properties-content-head">
                        <div class="aa-properties-content-head-left">

                                <label for="">Sort by</label>
                                <select name="sort" required>
                                    <option class="hidden">{{$l}}</option>
                                    <option >nameHouse</option>
                                    <option >price</option>
                                </select>

                        </div>
                        <div class="aa-properties-content-head-right">
                            <a id="aa-grid-properties" ><span class="fa fa-th"></span></a>
                            <a id="aa-list-properties" ><span class="fa fa-list"></span></a>
                        </div>
                    </div>
                    <!-- Start properties content body -->
                    <div class="aa-properties-content-body">
                        <ul class="aa-properties-nav " id="map">
                            <!-- Start loop -->

                            @foreach($d as $property)
                                <li>
                        <span class="coll">

                                    <article class="aa-properties-item">
                                        <a class="aa-properties-item-img" >
                                            <img alt="img" src="{{ asset('mainImage/' . $property->mainImage) }}">
                                        </a>
                                        @if($property->categoryHouse=='sell' && $property->reserve=='reverse now')
                                            <div class="aa-tag sold-out">
                                                Sold-out
                                            </div>
                                        @endif
                                        @if($property->categoryHouse=='rent' &&  $property->reserve=='Not reverse Yet')
                                            <div class="aa-tag for-rent">
                                                For {{$property->categoryHouse}}
                                            </div>
                                        @endif
                                        @if($property->categoryHouse=='sell' &&  $property->reserve=='Not reverse Yet')
                                            <div class="aa-tag for-sale">
                                                For {{$property->categoryHouse}}
                                            </div>
                                        @endif

                                        <div class="aa-properties-item-content">
                                            <div class="aa-properties-info" style="background: rgba(199,239,236,0.13) ">
                                                <h3><a> {{$property->nameHouse}}</a></h3>
                                                <hr>
                                                <strong>
                                                <span >{{$property->roomNumber}} Rooms</span>
                                                <span >{{$property->bathroom}} Baths</span><br>
                                                    @if($property->rate <= 1.5 )
                                                        <span style="color:darkred" class="fas fa-star"></span>
                                                        <span style="color:darkred" >{{$property->rate}}/5</span>
                                                        <span style="color:darkred">Bad</span>
                                                    @endif
                                                 @if($property->rate > 1.5 && $property->rate <= 2.5)
                                                        <span style="color:orange" class="fas fa-star"></span>
                                                        <span style="color:orange" class="fas fa-star"></span>
                                                        <span style="color:orange">{{$property->rate}}/5</span>
                                                        <span style="color:orange">GOOD</span>
                                                    @endif
                                                    @if($property->rate > 2.5 && $property->rate <= 3.5)
                                                        <span style="color:rgba(229,249,44,0.84)" class="fas fa-star"></span>
                                                        <span style="color:rgba(229,249,44,0.84)" class="fas fa-star"></span>
                                                        <span style="color:rgba(229,249,44,0.84)" class="fas fa-star"></span>
                                                        <span style="color: darkgreen" >{{$property->rate}}/5</span>
                                                        <span style="color: darkgreen" >VeryGOOD</span>
                                                    @endif
                                                    @if( $property->rate > 3.5)
                                                        <span style="color:rgba(229,249,44,0.84)" class="fas fa-star"></span>
                                                        <span style="color:rgba(229,249,44,0.84)" class="fas fa-star"></span>
                                                        <span style="color:rgba(229,249,44,0.84)" class="fas fa-star"></span>
                                                        <span style="color:rgba(229,249,44,0.84)" class="fas fa-star"></span>
                                                        <span style="color:rgba(24,190,56,0.87)" >{{$property->rate}}/5</span>
                                                        <span style="color:rgba(24,190,56,0.87)" >Excellent</span>
                                                    @endif
                                                    <br>
                                                    <span style="background:rgba(51,172,190,0.87)" class="badge" >{{$property->phone}} </span><span>Phone Owner</span>
                                                </strong>
                                            </div>
                                            <div class="aa-properties-about">
                                               <strong>Site House</strong>
                                                <p>{{$property->site}}</p>
                                                <strong>Price House</strong><br>
                                                <span class="aa-price">
                                                  @if($property->typePrice == null)
                                                        {{$property->price}} ل.س
                                                    @else
                                                        <strong>صاحب العقار اختار اخفاء السعر لمعرفة السعر والتفاوض عليه اتصل على الرقم الموجود في الاسفل </strong>
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
                        </span>

                                </li>

                        @endforeach

                                <!-- End loop -->
                        </ul>

                    </div>
                    <a  id="load" class="btnn">Load More</a>

                </div>
            </div>

            <!-- Start properties sidebar -->
            <div class="col-md-4">
                <aside class="aa-properties-sidebar">
                    <!-- Start Single properties sidebar -->
                    <div class="aa-properties-single-sidebar">
                        <h3>Properties Search</h3>

                            <div class="aa-single-advance-search autocomplete">
                                <input id="myInput" class="form-control" type="text" name="governorate" placeholder="Type your location" value="{{$x}}" required>
                            </div>
                            <div class="aa-single-advance-search">
                                <select class="form-control" name="categoryHouse" required>
                                    <option class="hidden">{{$y}}</option>
                                    <option>sell</option>
                                    <option>rent</option>
                                </select>
                            </div>
                            <div class="aa-single-advance-search">
                                <select class="form-control" name="typeHouse" required>
                                    <option class="hidden">{{$z}}</option>
                                    <option>flat</option>
                                    <option>land</option>
                                    <option>Villa</option>
                                    <option>palace</option>
                                    <option>office</option>
                                </select>
                            </div>
                        <div class="aa-single-advance-search">
                            <input  type="number" class="form-control" name="rate" min="0.0" max="5.0" v-model="x" style="width: 200px ;height: 40px;font-size: 17px" placeholder="Rate" required>
                            <span style="float: right; top:-26px;"  v-bind:style="{color:z}" class="glyphicon glyphicon-plus" v-text="y"></span>
                        </div>
                            <div class="aa-single-advance-search">
                                <input type="number" style="height: 40px;font-size: 17px" class="form-control" min="0" placeholder=" Room Number" value="{{$e}}" name="roomNumber" required>
                            </div>

                            <div class="aa-advance-search-bottom">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="aa-single-filter-search">
                                            <span>Price (SYR Bounds)</span><br>
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
                            <div class="aa-single-advance-search">
                                <input type="submit" value="Search" class="aa-search-btn">
                            </div>

                    </div>

                    <!-- Start Single properties sidebar -->
                    <div class="aa-properties-single-sidebar">
                        <h3>Populer Properties</h3>
                        <div class="media">
                            <div class="media-left">
                                <a >
                                    <img class="media-object" src="../assets1/img/signin-bg.jpg" alt="img">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a >This is Title</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <span>$65000</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a >
                                    <img class="media-object" src="../assets1/img/signin-bg.jpg" alt="img">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a>This is Title</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <span>$65000</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a >
                                    <img class="media-object" src="../assets1/img/signin-bg.jpg" alt="img">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a >This is Title</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <span>$65000</span>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>

        </div>
        </form>

    </f>

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

<script src="../assets1/js/JsHome.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script type="text/javascript">
    new Vue({
        el:'#map',
        data:{
            x:'',
            y:'',
            z:'',
        },
       watch:{
            x:function (value) {
                if (value <= 1.5 && value>0){
                    this.y='Bad';
                    this.z='darkred';
                }else if(value > 1.5 && value <= 2.5){
                    this.y='Good';
                    this.z='orange';
                }else if(value > 2.5 && value <= 3.5){
                    this.y='VeryGood';
                    this.z='darkgreen';
                }else if( value >= 3.5){
                    this.y='Excellent';
                    this.z='green';
                }

       }
      }
    });
</script>
<script>
    $(".coll").slice(0, 2).show();
    $(".btnn").on("click", function(){
        $(".coll:hidden").slice(0, 2).slideDown();
        if ($(".coll:hidden").length == 0) {
            $(".btnn").fadeOut('slow');
        }
    })
</script>

</body>
</html>
