<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../assets1/css/Css404.css" rel="stylesheet">
    <title>P7House| Evaluation User</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

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
@if($idUser == \Illuminate\Support\Facades\Auth::user()->id)
    <body>
    <div class="ag-page-404">

        <div class="ag-toaster-wrap">
            <div class="ag-toaster">
                <div class="ag-toaster_back"></div>
                <div class="ag-toaster_front">
                    <div class="js-toaster_lever ag-toaster_lever"></div>
                </div>
                <div class="ag-toaster_toast-handler">
                    <div class="js-toaster_toast ag-toaster_toast js-ag-hide"></div>

                </div>
            </div>

            <canvas id="canvas-404" class="ag-canvas-404"></canvas>
            <img class="ag-canvas-404_img" src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/404-error-smoke-from-toaster/images/smoke.png">
        </div>

    </div>
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script>
        (function ($) {
            $(function () {

                $().ready(function () {
                    (function () {
                        var requestAnimationFrame = window.reaquestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
                        window.requestAnimationFrame = requestAnimationFrame
                    })();
                    var canvas = document.getElementById('canvas-404');
                    if (canvas === null)return;
                    setTimeout(function () {
                        $('.js-toaster_lever').delay(200).animate({top: 30}, 100);
                        $('.js-toaster_toast').removeClass('js-ag-hide').addClass('js-ag-animated js-ag-bounce-in-up')
                    }, 800);
                    var ctx = canvas.getContext("2d"),
                        loading = true;

                    canvas.height = 210;
                    canvas.width = 300;

                    var parts = [],
                        minSpawnTime = 100,
                        lastTime = new Date().getTime(),
                        maxLifeTime = Math.min(6000, (canvas.height / (1.5 * 60) * 1000)),
                        emitterX = canvas.width / 2 - 50,
                        emitterY = canvas.height - 10,
                        smokeImage = new Image();

                    function spawn() {
                        if (new Date().getTime() > lastTime + minSpawnTime) {
                            lastTime = new Date().getTime();
                            parts.push(new smoke(emitterX, emitterY))
                        }
                    }
                    function render() {
                        if (loading) {
                            load();
                            return false
                        }
                        var len = parts.length;
                        ctx.clearRect(0, 0, canvas.width, canvas.height);
                        while (len--)if (parts[len].y < 0 || parts[len].lifeTime > maxLifeTime) {
                            parts.splice(len, 1)
                        } else {
                            parts[len].update();
                            ctx.save();
                            var offsetX = -parts[len].size / 2, offsetY = -parts[len].size / 2;
                            ctx.translate(parts[len].x - offsetX, parts[len].y - offsetY);
                            ctx.rotate(parts[len].angle / 180 * Math.PI);
                            ctx.globalAlpha = parts[len].alpha;
                            ctx.drawImage(smokeImage, offsetX, offsetY, parts[len].size, parts[len].size);
                            ctx.restore()
                        }
                        spawn();
                        requestAnimationFrame(render)
                    }
                    function smoke(x, y, index) {
                        this.x = x;
                        this.y = y;
                        this.size = 1;
                        this.startSize = 60;
                        this.endSize = 69;
                        this.angle = Math.random() * 359;
                        this.startLife = new Date().getTime();
                        this.lifeTime = 0;
                        this.velY = -1 - (Math.random() * 0.5);
                        this.velX = Math.floor(Math.random() * (-6) + 3) / 10
                    }
                    smoke.prototype.update = function () {
                        this.lifeTime = new Date().getTime() - this.startLife;
                        this.angle += 0.2;
                        var lifePerc = ((this.lifeTime / maxLifeTime) * 100);
                        this.size = this.startSize + ((this.endSize - this.startSize) * lifePerc * .1);
                        this.alpha = 1 - (lifePerc * .01);
                        this.alpha = Math.max(this.alpha, 0);
                        this.x += this.velX;
                        this.y += this.velY
                    }
                    smokeImage.src = document.getElementsByTagName('img')[0].src;
                    smokeImage.onload = function () {
                        loading = false
                    };
                    function load() {
                        if (loading) {
                            setTimeout(load, 3000);
                        } else {
                            render();
                        }
                    }

                    render();
                });

            });
        })(jQuery);
    </script>
    </body>
@else
    <body>
    @if(session('evaluateUser'))
        <div class="alert ">
            <span class="msg">{{session('evaluateUser')}}</span>
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

    <!-- Start Proerty header  -->

    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Evalute User </h2>
                        <ol class="breadcrumb">
                            <li><a>HOME</a></li>
                            <li><a>PROPERTIES</a></li>
                            <li><a>Evalute Now...</a></li>
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
                            <h2>Evalute User</h2>
                            <span></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi commodi eum dolorem aut eos, debitis quaerat reiciendis, officiis consectetur ducimus atque suscipit ab at tempora!</p>
                        </div>

                        <!-- Start gallery -->
                        <div class="aa-gallery-content">
                            <div class="contain"  id="map">
                                <input type="number" name="test" value="{{$show}}" class="hidden">
                                <div class="wrapper">
                                    <form action="" method="post">
                                        @csrf
                                        <input type="radio" name="rate" value="1" id="star-1" required>
                                        <input type="radio" name="rate" value="2" id="star-2" required>
                                        <input type="radio" name="rate" value="3" id="star-3" required>
                                        <input type="radio" name="rate" value="4" id="star-4" required>
                                        <input type="radio" name="rate" value="5" id="star-5" required>
                                        <div class="content">
                                            <div class="outer">
                                                <div class="emojis">
                                                    <li class="slideImg"><img src="../assets1/img/evaluation/emoji1.jpg" alt=""></li>
                                                    <li><img src="../assets1/img/evaluation/emoji2.jpg" alt=""></li>
                                                    <li><img src="../assets1/img/evaluation/emoji4.jpg" alt=""></li>
                                                    <li><img src="../assets1/img/evaluation/emoji3.jpg" alt=""></li>
                                                    <li><img src="../assets1/img/evaluation/emoji5.jpg" alt=""></li>
                                                </div>
                                            </div>
                                            <div class="stars">
                                                <label  for="star-1" class=" star-1 fas fa-star"></label>
                                                <label for="star-2" class="star-2 fas fa-star"></label>
                                                <label for="star-3" class="star-3 fas fa-star"></label>
                                                <label for="star-4" class="star-4 fas fa-star"></label>
                                                <label for="star-5" class="star-5 fas fa-star"></label>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <span class="text"></span>
                                            <span class="numb"></span>
                                        </div>
                                        <div class="footer">
                                            <button v-bind:style="className" style="margin: auto" class="w3-btn w3-white w3-border w3-border-red w3-round-large">Evalute</button>
                                        </div>

                                    </form>
                                </div>
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
@endif
</html>
