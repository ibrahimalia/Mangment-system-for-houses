<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>P7House| Card</title>
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../assets1/css/CssConfirm.css">
    <link rel="stylesheet" href="../assets1/css/CssCard.css">
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
<style>
    /*for alert when confirm reserve*/

    .alert{
        z-index: 20;
        background: #2ecc71;
        padding: 20px 40px;
        min-width: 350px;
        position: absolute;
        right: 0px;
        top: 90px;
        border-radius: 4px;
        border-left: 8px solid;
        overflow: hidden;
        opacity: 0;
        pointer-events: none;
    }
    .alert{
        opacity: 1;
        pointer-events: auto;
    }
    .alert{
        animation: show_slide 1s ease forwards;
    }
    @keyframes show_slide {
        0%{
            transform: translateX(100%);
        }
        40%{
            transform: translateX(-10%);
        }
        80%{
            transform: translateX(0%);
        }
        100%{
            transform: translateX(-10px);
        }
    }
    .alert.hide{
        animation: hide_slide 1s ease forwards;
    }
    @keyframes hide_slide {
        0%{
            transform: translateX(-10px);
        }
        40%{
            transform: translateX(0%);
        }
        80%{
            transform: translateX(-10%);
        }
        100%{
            transform: translateX(100%);
        }
    }

    .alert .msg{
        padding: 0 20px;
        font-size: 18px;
        color:black;
    }
    .alert .close-btn{
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        padding: 20px 18px;
        cursor: pointer;
    }

</style>
</head>
<body>
@if(session('card'))
    <div class="alert ">
        <span class="msg">{{session('card')}}</span>
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
                            @foreach($data as $type)
                            @if( $type->typeUser == 'office')
                                <li><a href="/Add_home_from_user">ADD Home</a></li>
                            @endif
                            @endforeach
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
                    <h2> Card </h2>
                    <ol class="breadcrumb">
                        <li><a>HOME</a></li>
                        <li><a>Card</a></li>
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
                        <h2>Card </h2>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi commodi eum dolorem aut eos, debitis quaerat reiciendis, officiis consectetur ducimus atque suscipit ab at tempora!</p>
                    </div>
                    <!-- Start Card -->
                    <span id="app">
                            <input name="test" value="{{$show}}" hidden>
                    <div class="contain">
                        <div class="wrapper">
                            @foreach($card as $data)
                                @if($data->typeCard == "Golden")
                            <div class="table basic">
                                <div class="price-section">
                                    <div class="price-area">
                                        <div class="inner-area">
                                            <span class="text">$</span>
                                            <span class="price">{{$data->priceCard}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-name"></div>
                                <ul class="features">
                                    <li>
                                        <span class="list-name">One Selected Template</span>
                                        <span class="icon check"><i class="fas fa-check"></i></span>
                                    </li>
                                    <li>
                                        <span class="list-name">100% Responsive Design</span>
                                        <span class="icon check"><i class="fas fa-check"></i></span>
                                    </li>
                                    <li>
                                        <span class="list-name">Credit Remove Permission</span>
                                        <span class="icon cross"><i class="fas fa-times"></i></span>
                                    </li>
                                    <li>
                                        <span class="list-name">Lifetime Template Updates</span>
                                        <span class="icon cross"><i class="fas fa-times"></i></span>
                                    </li>

                                <form action=" " method="post">
                                    @csrf
                                    <input name="idUser" type="number" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" hidden>
                                    <input name="nameUser" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" hidden >
                                    <input name="typeUser" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->usertype}}" hidden >
                                    <input name="idCard" type="number" value="{{$data->id}}" hidden>
                                    <input name="cardPrice" type="number" value="{{$data->priceCard}}" hidden>
                                    <input name="CardQuantity" type="number" value="{{$data->quantity}}" hidden>
                                <div class="btn" v-bind:style="className"><button>Purchase</button></div>
                                </form>
                                </ul>
                            </div>
                                @endif
                               @if($data->typeCard == "Salver")
                            <div class="table premium">
                                <div class="ribbon"><span>Offer</span></div>
                                <div class="price-section">
                                    <div class="price-area">
                                        <div class="inner-area">
                                            <span class="text">$</span>
                                            <span class="price">{{$data->priceCard}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-name"></div>
                                <ul class="features">
                                    <li>
                                        <span class="list-name">Five Existing Templates</span>
                                        <span class="icon check"><i class="fas fa-check"></i></span>
                                    </li>
                                    <li>
                                        <span class="list-name">100% Responsive Design</span>
                                        <span class="icon check"><i class="fas fa-check"></i></span>
                                    </li>
                                    <li>
                                        <span class="list-name">Credit Remove Permission</span>
                                        <span class="icon check"><i class="fas fa-check"></i></span>
                                    </li>
                                    <li>
                                        <span class="list-name">Lifetime Template Updates</span>
                                        <span class="icon cross"><i class="fas fa-times"></i></span>
                                    </li>
                                    <form action=" " method="post">
                                        @csrf
                                        <input name="idUser" type="number" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" hidden>
                                        <input name="nameUser" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" hidden >
                                        <input name="typeUser" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->usertype}}" hidden >
                                        <input name="idCard" type="number" value="{{$data->id}}" hidden>
                                        <input name="cardPrice" type="number" value="{{$data->priceCard}}" hidden>
                                        <input name="CardQuantity" type="number" value="{{$data->quantity}}" hidden>
                                        <div class="btn" v-bind:style="className"><button>Purchase</button></div>
                                    </form>
                                </ul>
                            </div>
                                    @endif
                                @if($data->typeCard == "Diamond")
                            <div class="table ultimate">
                                <div class="ribbon"><span>Offer</span></div>
                                <div class="price-section">
                                    <div class="price-area">
                                        <div class="inner-area">
                                            <span class="text">$</span>
                                            <span class="price">{{$data->priceCard}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-name"></div>
                                <ul class="features">
                                    <li>
                                        <span class="list-name">All Existing Templates</span>
                                        <span class="icon check"><i class="fas fa-check"></i></span>
                                    </li>
                                    <li>
                                        <span class="list-name">100% Responsive Design</span>
                                        <span class="icon check"><i class="fas fa-check"></i></span>
                                    </li>
                                    <li>
                                        <span class="list-name">Credit Remove Permission</span>
                                        <span class="icon check"><i class="fas fa-check"></i></span>
                                    </li>
                                    <li>
                                        <span class="list-name">Lifetime Template Updates</span>
                                        <span class="icon check"><i class="fas fa-check"></i></span>
                                    </li>
                                    <form action=" " method="post">
                                        @csrf
                                        <input name="idUser" type="number" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" hidden>
                                        <input name="nameUser" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" hidden >
                                        <input name="typeUser" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->usertype}}" hidden >
                                        <input name="idCard" type="number" value="{{$data->id}}" hidden>
                                        <input name="cardPrice" type="number" value="{{$data->priceCard}}" hidden>
                                        <input name="CardQuantity" type="number" value="{{$data->quantity}}" hidden>
                                        <div class="btn" v-bind:style="className"><button>Purchase</button></div>
                                    </form>
                                </ul>
                            </div>
                                    @endif
                            @endforeach

                    </div>

                    </div>
                    </span>
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
        el:'#app',
        data:{
            x:document.querySelector("input[name=test]").value,
            unshow:'display:none',
            show:''

        },
        computed:{
            'className':function () {
                if (this.x == 1){
                    return this.unshow;
                }else {

                    return this.show;
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

