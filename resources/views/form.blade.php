<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

<form action="/search">
    <input type="text" name="name" placeholder="Name or id of the pokemon" required>
    <input type="submit">
</form>

@if (isset($id))
        <br>ID : {{$id}}
        <br>Name : {{$name}}
        <br>Type :<ul>
            @foreach ($pokemon_type as $type[0])
            <li> {{$type['0']['type']['name']}} </li>
            @endforeach
        </ul>
        <br><img src="{{$url_img}}" /> 
        @endif
</body>
</html>