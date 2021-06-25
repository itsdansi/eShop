

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style> 
    .header,.footer{
        background-color: #ebdef3;
        padding : 1%;
        text-align: center;
    }
    .content{
        background-color:#dedede;
        padding : 30%;
        text-align: center;
    }
    </style>
</head>
<body>

@section('header')
<div class = "header">
<h1>This is Header part</h1>
</div>
@show

<div class = "content"> @yield('content')</div>


@section('footer')
<div class = "footer">
<h1>This is Footer part</h1>
</div>
@show



</body>
</html>