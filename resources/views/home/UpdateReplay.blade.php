<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>P7House |  Update Replay</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding: 20px">
            <div class="card">
                <div class="card-header">Update your Replay</div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <textarea class="form-control" name="contentReplay"></textarea>
                        <br>
                        <button class="btn btn-success">Commit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

