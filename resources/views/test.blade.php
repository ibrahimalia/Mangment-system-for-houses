<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>P7House| Social</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets1/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../assets1/css/CssConfirm.css">
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <![endif]-->
    <style>
        html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
        .Disabled{
            pointer-events: none;
            cursor: not-allowed;
            opacity: 0.65;
            filter: alpha(opacity=65);
            -webkit-box-shadow: none;
            box-shadow: none;
            color: blue;
        }
    </style>
</head>
<body>
<div id="app">
    @if(session('deletePost'))
        <div class="alert ">
            <span class="msg">{{session('deletePost')}}</span>
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
                    <h2>Social House </h2>
                    <ol class="breadcrumb">
                        <li><a>HOME</a></li>
                        <li><a>Social</a></li>
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
                    <!-- Page Container -->
                    <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
                        <!-- The Grid -->
                        <div class="w3-row">
                            <!-- Left Column -->
                            <div class="w3-col m3">

                                <!-- Accordion -->
                                <div class="w3-card w3-round">
                                    <div class="w3-white">
                                        <a href="/AddPost"> <button  class="w3-button w3-block  w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> ADD POST</button></a>
                                    </div>
                                </div>
                                <br>

                                <!-- Alert Box -->
                                <div class="w3-container w3-display-container w3-round  w3-border w3-theme-border w3-margin-bottom " style="background: whitesmoke">
        <span onclick="this.parentElement.style.display='none'" class="w3-button  w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
                                    <div class=" w3-block  w3-left-align" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green"></span></div>
                                    <br>
                                    @foreach(auth()->user()->unreadNotifications as $notification)
                                        <a style="font-size: 10px" href="/comment/{{$notification->data['id']}}" ><i class='far fa-comment' style="color: red;font-size: 20px"></i>{{$notification->data['name']}} add comment on post </a><br><hr>
                                    @endforeach
                                </div>

                                <!-- End Left Column -->
                            </div>

                            <!-- Middle Column -->
                            <div class="w3-col m7">
                                @foreach($data as $property)
                                    <span class="coll">
                                <div class="w3-container w3-card w3-white w3-round w3-margin"><br><br>
                                    @if($property->idUser == \Illuminate\Support\Facades\Auth::user()->id )
                                    <span class="w3-right w3-opacity" title="Delete Post" style="font-size: 5px;color:red"><a href="/Delete_Post/{{$property->id}}"><i class="glyphicon glyphicon-trash"></i></a></span>
                                    @endif
                                    <img src="{{ asset('loads/' . $property->image) }}" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                                    <h4>{{$property->name}} <br> <span class=" w3-opacity" style="font-size: 10px">{{$property->time}}</span></h4>
                                    <hr class="w3-clear">
                                    <p style="float: right"> {{$property->contentPost}}<br></p>
                                    <div class="w3-row-padding" style="margin:0 -16px">
                                            <?php
                                        /** @var TYPE_NAME $property */
                                        foreach (explode(',',$property->postImage)as $y) {?>
                                                <div class="">
                                                <img src="{{ asset('postImage/' . $y) }}" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
                                                </div>
                                            <?php   } ?>
                                    </div><hr>
                                     @if(changeDateFormate($property->id,$test) == 1)
                                        <button style="position: absolute;color: blue"  class="btn Disabled "><i class="fa fa-thumbs-up"></i>  {{numberLike($property->id,$numLike)}}</button>

                                    @else
                                        <example-component v-bind:id="{{$property->id}}"></example-component>
                                    @endif

                                   <a href="/comment/{{$property->id}}"><button type="button" style="float: right" class="btn  w3-margin-bottom"><i class="fa fa-comment"></i>  {{numberComment($property->id,$numComment)}} </button></a>
                                 </div>
                               </span>
                                @endforeach
                            </div>

                            <!-- Right Column -->
                            <div class="w3-col m2">
                                <div class="w3-card w3-round w3-white w3-center">
                                    <div class="w3-container">
                                        <p>Upcoming Events:</p>
                                        <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
                                        <p><strong>Holiday</strong></p>
                                        <p>Friday 15:00</p>
                                        <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
                                    </div>
                                </div>
                                <br>
                                <div class="w3-card w3-round w3-white w3-center">
                                    <div class="w3-container">
                                        <p>Upcoming Events:</p>
                                        <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
                                        <p><strong>Holiday</strong></p>
                                        <p>Friday 15:00</p>
                                        <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
                                    </div>
                                </div>
                                <br>
                                <div class="w3-card w3-round w3-white w3-center">
                                    <div class="w3-container">
                                        <p>Upcoming Events:</p>
                                        <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
                                        <p><strong>Holiday</strong></p>
                                        <p>Friday 15:00</p>
                                        <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Right Column -->
                </div>

                <!-- End Grid -->
            </div>
            <!-- End Page Container -->
        </div>
        <br>
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
</div>

</body>
<!-- / Footer -->
<script src="{{asset('js/app.js')}}" ></script>
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
<script>
    // Accordion
    function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-theme-d1";
        } else {
            x.className = x.className.replace("w3-show", "");
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace(" w3-theme-d1", "");
        }
    }

    // Used to toggle the menu on smaller screens when clicking on the menu button
    function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
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
</html>


