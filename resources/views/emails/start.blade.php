<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body>
<div class="w3-container  w3-display-middle w3-margin">
    <div class="w3-container w3-card-4">
        <h2>Hello.....</h2>
        <P>P7House Thanks you for your confidence ...<br>
            This is the email to complete the reservation procedures and know your opinion, because it matters to us ...</P>
        <h5>Links to the homes you have booked :</h5>
        <table class="table table-hover">
            <tbody>
            @foreach($x as $m)
                <tr>
                    <td><a href="http://127.0.0.1:8000/evaluation/{{$m->idHouse}}"><button class="w3-btn w3-white w3-border w3-border-red w3-round-large">Click on the link</button></a> </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

</div>

</body>
</html>
