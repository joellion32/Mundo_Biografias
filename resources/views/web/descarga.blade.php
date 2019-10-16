<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <center><h2 class="h5 my-3">{{$entrada->name}}</h2>
        <img src="{{$entrada->file}}" style="width: 190px; height: 200px; border-radius:2px;"></center>
        <br>
        <span style="text-align:justify;"><p>{!!$entrada->body!!}</p></span>
</body>
</html>