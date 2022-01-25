<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>P7House | Comment</title>
    <link rel="shortcut icon" href="../assets1/img/favicon.ico" type="image/x-icon">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="../assets1/css/CssHome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
@if(session('notUpdate'))
    <div class="alertf ">
        <span class="msg">{{session('notUpdate')}}</span>
        <div class="close-btn">
            <span class="fas fa-check"></span>
        </div>
    </div>
@endif
@if(session('update'))
    <div class="alert ">
        <span class="msg">{{session('update')}}</span>
        <div class="close-btn">
            <span class="fas fa-check"></span>
        </div>
    </div>
@endif
@if(session('replay'))
    <div class="alert">
        <span class="msg">{{session('replay')}}</span>
        <div class="close-btn">
            <span class="fas fa-check"></span>
        </div>
    </div>
@endif
<div id="dar">
    <div class="container">
        @foreach($user as $data)
            <span class="coll">
                                <div class="w3-container  w3-white w3-round w3-margin"><br><br>
                                  <img src="{{ asset('loads/' . $data->image) }}" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                                    <span class="w3-right w3-opacity" style="font-size: 10px">{{$data->time}}</span>
                                    <h4>{{$data->name}}</h4><br>
                                    <hr class="w3-clear">
                                    <p style="float: right"> {{$data->contentPost}}<br></p>
                                    <div class="w3-row-padding" style="margin:0 -14px">
                                            <?php
                                        /** @var TYPE_NAME $data */
                                        foreach (explode(',',$data->postImage)as $y) {?>
                                                <div class="">
                                                <img src="{{ asset('postImage/' . $y) }}" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
                                                </div><br>
                                            <?php   } ?>
                                    </div>
                                 </div>
                               </span>
        @endforeach
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($post as $data)
                <ul>
                    <li style="list-style: none">
                            <div class="media  p-3">
                                <img src="{{ asset('loads/' . $data->image) }}" alt="image" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                                <div class="media-body">
                                    <br>
                                    <div style="background:whitesmoke;border-radius: 20px;opacity: 5;padding: 6px">
                                    <h4>{{$data->name}}</h4>
                                    <p>{{$data->contentComment}}</p>
                                    </div>
                                    <a  href="/replay/{{$data->id}}/{{$idPost}} " style="text-decoration: none;font-size:10px;padding: 1px;color: green">{{numberReplay($data->id,$numReplay)}}Replay</a>
                                    <a href="/delete/{{$data->id}}/{{$idPost}}" style="text-decoration: none;font-size:10px ;padding: 1px;color: green">Delete</a>
                                    <a href="/update/{{$data->id}}/{{$idPost}} " style="text-decoration: none;font-size:10px;padding: 1px;color: green ">Update</a>
                                    <a style="font-size:10px;text-decoration: none;cursor: none;padding: 1px;color: green"><i>{{$data->timeComment}}</i></a>
                                </div>
                            </div>
                            <hr>
                    </li>
                </ul>
                @endforeach
            <ul>
        <input value="{{$idPost}}" name="test" hidden>
        <li style="list-style: none" v-for="(message,index) in messages" :key="index">
            <div  v-if="message.id == y">
            <div class="media  p-3">
               <img v-bind:src="'../loads/'+message.image" alt="image" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                <div class="media-body">
                    <div style="background:rgba(198,204,204,0.93);border-radius: 20px;opacity: 5;padding: 6px">
                    <h4> @{{message.user}} </h4>
                    <p> @{{message.description}}</p>
                    </div>
                    <a href="" style="font-size:10px;text-decoration: none;cursor: none;padding: 1px"><i>Posted @{{message.time}}</i></a>
                </div>
            </div>
                <hr>
            </div>
        </li>
    </ul>
            </div>
        </div>
    </div>
</div>

<div id="map">
    <comment v-bind:id="{{$idPost}}"></comment>
</div>
<script src="{{asset('js/app.js')}}" ></script>

<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;
    var pusher = new Pusher('6a3e32f4399e1afe108e', {
        cluster: 'mt1'
    });

    var channel = pusher.subscribe(`my-channel.${2}`);
    channel.bind('my-event', function(data) {
        dar.messages.push(data);
    });

    // Vue application
    const dar = new Vue({
        el: '#dar',
        data: {
            messages: [],
            y:document.querySelector("input[name=test]").value
        },

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
<!-- End  -->
<!-- For alert -->
<script>
    setTimeout(function(){
        $('.alertf').removeClass("show");
        $('.alertf').addClass("hide");
    },5500);

    $('.close-btn').click(function(){
        $('.alertf').removeClass("show");
        $('.alertf').addClass("hide");
    });
</script>
<!-- End  -->
</body>
</html>
