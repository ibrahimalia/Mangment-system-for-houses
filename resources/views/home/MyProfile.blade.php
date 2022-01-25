<!DOCTYPE html>
<html>
<title>P7House | Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
<link href="../assets1/css/CssHome.css" rel="stylesheet">

<!-- Main style sheet -->
<link href="../assets1/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="../assets1/css/CssConfirm.css">

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
    html,div,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}

    .copyright {

        font-family: Helvetica, Arial, sans-serif;
        font-size: 12px;
        text-transform: uppercase;
    }
    .copyright a{
        text-decoration: none;
        color: #EE4E44;
    }
    /****** CODE ******/

    .file-upload{   width: 200px;display:block;text-align:center;font-family: Helvetica, Arial, sans-serif;font-size: 12px;}
    .file-upload .file-select{display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
    .file-upload .file-select .file-select-button{background:#dce4ec;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
    .file-upload .file-select .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
    .file-upload .file-select:hover{border-color:#34495e;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
    .file-upload .file-select:hover .file-select-button{background:#34495e;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
    .file-upload.active .file-select{border-color:#3fa46a;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
    .file-upload.active .file-select .file-select-button{background:#3fa46a;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
    .file-upload .file-select input[type=file]{z-index:100;cursor:pointer;position:absolute;height:100%;width:100%;top:0;left:0;opacity:0;filter:alpha(opacity=0);}
    .file-upload .file-select.file-select-disabled{opacity:0.65;}
    .file-upload .file-select.file-select-disabled:hover{cursor:default;display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;margin-top:5px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
    .file-upload .file-select.file-select-disabled:hover .file-select-button{background:#dce4ec;color:#666666;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
    .file-upload .file-select.file-select-disabled:hover .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
</style>
<body >
@if(session('deleteCard'))
    <div class="alert ">
        <span class="msg">{{session('deleteCard')}}</span>
        <div class="close-btn">
            <span class="fas fa-check"></span>
        </div>
    </div>
@endif
@if(session('deleteReservation'))
    <div class="alert ">
        <span class="msg">{{session('deleteReservation')}}</span>
        <div class="close-btn">
            <span class="fas fa-check"></span>
        </div>
    </div>
@endif
@if(session('deleteYourHouse'))
    <div class="alert ">
        <span class="msg">{{session('deleteYourHouse')}}</span>
        <div class="close-btn">
            <span class="fas fa-check"></span>
        </div>
    </div>
@endif
@if(session('acceptOrder'))
    <div class="alert ">
        <span class="msg">{{session('acceptOrder')}}</span>
        <div class="close-btn">
            <span class="fas fa-check"></span>
        </div>
    </div>
@endif
@if(session('deleteOrder'))
    <div class="alert ">
        <span class="msg">{{session('deleteOrder')}}</span>
        <div class="close-btn">
            <span class="fas fa-check"></span>
        </div>
    </div>
@endif
@if(session('deleteEvaluationUser'))
    <div class="alert ">
        <span class="msg">{{session('deleteEvaluationUser')}}</span>
        <div class="close-btn">
            <span class="fas fa-check"></span>
        </div>
    </div>
@endif
@if(session('deleteEvaluationHouse'))
    <div class="alert ">
        <span class="msg">{{session('deleteEvaluationHouse')}}</span>
        <div class="close-btn">
            <span class="fas fa-check"></span>
        </div>
    </div>
@endif
<div>
    <!-- Page Container -->
    <div class="w3-content w3-margin-top" style="max-width:1400px;">

        <!-- The Grid -->
        <div class="w3-row-padding">

            <!-- Left Column -->
            <div class="w3-third">

                <div class="w3-white w3-text-grey w3-card-4">
                    <div class="w3-display-container">

                        <img src="{{ asset('loads/' . \Illuminate\Support\Facades\Auth::user()->image) }}" style="width:100%;border-radius: 10px" alt="Avatar">
                        <div class="w3-display-bottomleft w3-container w3-text-black">
                            <h2>{{\Illuminate\Support\Facades\Auth::user()->name}} </h2>

                        </div>
                    </div>
                    <br>
                    <div class="w3-container">
                        <p  class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i> Your Information</b></p>
                        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>{{\Illuminate\Support\Facades\Auth::user()->siteUser}}</p>
                        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>{{\Illuminate\Support\Facades\Auth::user()->email}}</p>
                        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>{{\Illuminate\Support\Facades\Auth::user()->phone}}</p>

                        <hr>

                        <br>
                        <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Website Information</b></p>
                        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>P7House</p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Syria,Damascus</p>
                        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>P7House@gmail.com</p>
                        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>1224435534</p>
                        <br>
                    </div>
                </div>
                <br>
                <!-- End Left Column -->
            </div>

            <!-- Right Column -->
            <div class="w3-twothird">

                <div class="w3-container w3-card w3-white w3-margin-bottom">
                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xlarge w3-text-teal">Management </i>

                    </h2>
                    <div class="w3-container">
                        <div   class="panelL  ">
                            <div id="barR" style="font-size: 10px">
                                <ul class="nav nav-pills ">

                                    <li class="active"><a data-toggle="pill" href="#menu1">Edit</a></li>
                                    <li><a data-toggle="pill"  href="#menu4">Image</a></li>
                                    <li><a data-toggle="pill"  href="#menu2">Card</a></li>
                                    <li><a data-toggle="pill"  href="#menu3">Houses</a></li>


                                </ul>

                                <div class="tab-content">

                                    <div id="menu1" class="tab-pane active">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            @csrf
                                        <div class="DesS">
                                            <div class="address">
                                                <div class="subject">
                                                    <div class="container">
                                                        <div class="row justify-content-center">
                                                            <div class="col-md-8">
                                                                <div class="card">
                                                                    <br>
                                                                    <strong class="card-header" style="color: #2db94d">Update your Account</strong><br><hr>
                                                                    <div class="card-body">

                                                                            <i>Name:</i>
                                                                            <input type="text" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" class="form-control" ><br>
                                                                            <i>Governorate:</i>
                                                                            <input type="text" name="siteUser" value="{{\Illuminate\Support\Facades\Auth::user()->siteUser}}" class="form-control" ><br>
                                                                            <i>Email:</i>
                                                                            <input type="text" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" class="form-control" >
                                                                            <br>
                                                                            <i>Phone:</i>
                                                                            <input type="number" name="phone" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" class="form-control" >
                                                                            <br>
                                                                            <button class="btn btn-primary">Change</button>

                                         </form>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu4" class="tab-pane DesS">
                                        <br>
                                        <strong style="color: #2db94d"> Update Your Image</strong>
                                        <hr>
                                        <div class="container mt-3">
                                            <br>
                                            <img src="{{ asset('loads/' . \Illuminate\Support\Facades\Auth::user()->image) }}" alt="image" style="width:200px;height:200px;border-radius: 100px">
                                            <br>
                                            <form action="" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="file-upload">
                                                    <div class="file-select">

                                                        <div class="file-select-button" id="fileName">Choose File</div>
                                                        <div class="file-select-name" id="noFile">No file chosen...</div>
                                                        <input type="file" name="image" id="chooseFile">
                                                    </div>
                                                </div><br>
                                                <button class="btn btn-primary" >Upload</button>
                                             </form>
                                        </div>
                                    </div>


                                    <div id="menu2" class="tab-pane DesS">
                                        <br>
                                        <strong style="color: #2db94d">  Your Card</strong>
                                        <hr>
                                        @if($card != null)
                                        <div class="container-fluid">
                                            <table class="table  table-hover" >
                                                <thead>
                                                <tr>
                                                    <th>Card Price</th>
                                                    <th>Card Quantity</th>
                                                    <th></th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($card as $data)
                                                <tr>
                                                    <td>{{$data->cardPrice}}</td>
                                                    <td>{{$data->CardQuantity}}</td>
                                                    <td><a href="/My_Profile/delete/{{$data->idUser}}"><button class="btn btn-danger" style="font-size: 10px">Delete</button></a></td>
                                                </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                            @else
                                            <div class="container-fluid"><strong style="font-size: 20px;color: red">* No subscribe in our card yet</strong></div><br>
                                            @endif
                                    </div>




                                    <div id="menu3" class="tab-pane DesS">
                                        <br>
                                        <strong style="color: #2db94d"> Your reservation</strong>
                                        <hr>
                                        @if($reverse != null)

                                        <div class="container-fluid">
                                            <table class="table  table-hover" >
                                                <thead>
                                                <tr>
                                                    <th>House</th>
                                                    <th>Price</th>
                                                    <th>Confirm</th>
                                                    <th></th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($reverse as $data)
                                                <tr>
                                                    <td>{{$data->nameHouse}}</td>
                                                    <td>{{$data->price}}</td>
                                                    @if($data->confirm == 0)
                                                    <td>Dont confirm yet</td>
                                                        @else
                                                            <td>reservation confirm </td>
                                                        @endif
                                                    <td><a href="/My_Profile/delete/reservation/{{$data->idUser}}/{{$data->idHouse}}"><button class="btn btn-danger" style="font-size: 5px">Delete </button></a></td>
                                                </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        @else
                                            <div class="container-fluid"><strong style="font-size: 20px;color: red">* No reservation  yet</strong></div>
                                        @endif
                                        <br>
                                        <strong style="color: #2db94d">  Your Houses</strong>
                                        <hr>
                                        @if($YHouse != null)

                                        <div class="container-fluid" style="background: whitesmoke">
                                            <table class="table  table-hover" >
                                                <thead>
                                                <tr>
                                                    <th>House</th>
                                                    <th>Rate</th>
                                                    <th>Price</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($YHouse as $data)
                                                <tr>
                                                    <td>{{$data->nameHouse}}</td>
                                                    <td>{{$data->rate}}</td>
                                                    <td>{{$data->price}}</td>
                                                    <td><a href="/My_Profile/delete/Your_House/{{$data->idUser}}/{{$data->id}}"><button class="btn btn-danger" style="font-size: 5px">Delete </button></a></td>
                                                </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        @else
                                            <div class="container-fluid"><strong style="font-size: 20px;color: red">* You did not add any home yet</strong></div>
                                        @endif
                                        <br>
                                        <strong style="color: #2db94d"> Order reservation for your houses</strong>
                                        <hr>
                                        @if($orderConfirm != null)

                                        <div class="container-fluid" >
                                            <table class="table  table-hover" >
                                                <thead>
                                                <tr>
                                                    <th>House</th>
                                                    <th>Price</th>
                                                    <th></th>
                                                    <th></th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($orderConfirm as $data)
                                                <tr>
                                                    <td>{{$data->nameHouse}}</td>
                                                    <td>{{$data->price}}</td>
                                                    <td><a href="/My_Profile/delete/order/{{$data->idHouse}}/{{$data->idUser}}"><button class="btn btn-danger" style="font-size: 5px">Delete </button></a></td>
                                                    <td><a href="/My_Profile/accept/order/{{$data->idHouse}}/{{$data->idUser}}"><button class="btn btn-success" style="font-size: 5px">Accept </button></a></td>

                                                </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        @else
                                            <div class="container-fluid"><strong style="font-size: 20px;color: red">* No order confirm  yet</strong></div><br>
                                        @endif
                                        <br>
                                        <strong style="color: #2db94d">* Evaluation houses</strong>
                                        <hr>
                                        @if($evalHouse != null)

                                            <div class="container-fluid" style="background: whitesmoke">
                                                <table class="table  table-hover" >
                                                    <thead>
                                                    <tr>
                                                        <th>House</th>
                                                        <th>Rate</th>
                                                        <th></th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($evalHouse as $data)
                                                        <tr>

                                                            <td>{{$data->nameHouse}}</td>
                                                            <td>{{$data->rate}}</td>
                                                            <td><a href="/My_Profile/delete_evaluation_house/order/{{$data->idUser}}/{{$data->idHouse}}"><button class="btn btn-danger" style="font-size: 5px">Delete </button></a></td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        @else
                                            <div class="container-fluid"><strong style="font-size: 20px;color: red">* No evaluation yet</strong></div><br>
                                        @endif
                                        <br>
                                        <strong style="color: #2db94d">* Evaluation Users</strong>
                                        <hr>
                                        @if($evalUser != null)

                                            <div class="container-fluid" >
                                                <table class="table  table-hover" >
                                                    <thead>
                                                    <tr>
                                                        <th>User</th>
                                                        <th>Rate</th>
                                                        <th></th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($evalUser as $data)
                                                        <tr>
                                                            <td>{{$data->name}}</td>
                                                            <td>{{$data->rate}}</td>
                                                            <td><a href="/My_Profile/delete_evaluation_user/order/{{$data->idUserEvaluate}}/{{$data->idUser}}"><button class="btn btn-danger" style="font-size: 5px">Delete </button></a></td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        @else
                                            <div class="container-fluid"><strong style="font-size: 20px;color: red">* No evaluation yet</strong></div><br>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Grid -->
        </div>
        <!-- End Page Container -->
        </div>
    </div>
<script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous">

</script>
<script>
    $('#chooseFile').bind('change', function () {
        var filename = $("#chooseFile").val();
        if (/^\s*$/.test(filename)) {
            $(".file-upload").removeClass('active');
            $("#noFile").text("No file chosen...");
        }
        else {
            $(".file-upload").addClass('active');
            $("#noFile").text(filename.replace("C:\\fakepath\\", ""));
        }
    });

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
</body>

</html>
