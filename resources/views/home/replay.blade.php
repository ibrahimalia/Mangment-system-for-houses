<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>P7House |  Replay Comment</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding: 20px">
            @foreach($dataReplay as $data)
                <ul>
                    <li style="list-style: none">
                        <div class="media  p-3">
                            <img src="{{ asset('loads/' . $data->image) }}" alt="image" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                            <div class="media-body">
                                <br>
                                <div style="background:whitesmoke;border-radius: 20px;opacity: 5;padding: 6px">
                                    <h4>{{$data->name}}</h4>
                                    <p>{{$data->contentReplay}}</p>
                                </div>
                                <a href="/deleteReplay/{{$data->idComment}}/{{$data->idPost}}/{{$data->id}} " style="text-decoration: none;font-size:1px ;padding: 1px;color: green">Delete</a>
                                <a href="/UpdateReplay/{{$data->idComment}}/{{$data->idPost}}/{{$data->id}}" style="text-decoration: none;font-size:1px;padding: 1px;color: green ">Update</a>
                                <a href="" style="font-size:1px;text-decoration: none;cursor: none;padding: 1px;color: green"><i>{{$data->timeReplay}}</i></a>

                            </div>
                        </div>
                        <hr>
                    </li>
                </ul>
            @endforeach
            <ul>
            <div class="card">
                <div class="card-header">Replay on comment</div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <textarea class="form-control" name="contentReplay"></textarea>
                        <br>
                        <button class="btn btn-success">Send Replay ....</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

