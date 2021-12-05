<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <h1>Home page</h1>
    <hr>
    <br/>
    @foreach($users as $key => $user)
        <ul><a>{{$user->id_user}}  --   {{$user->name_user}}</a>
            @foreach($user->orders as $order)
                <li>ID Order: {{$order->id_order}}</li>
            @endforeach
        </ul>
    @endforeach

</body>
</html>
