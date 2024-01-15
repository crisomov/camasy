<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body>


<form method="post">
	@csrf
    <input type="text" name="name" placeholder="name"><br>
	<input type="text" name="username" placeholder="username"><br>
	<input type="email" name="email" placeholder="email"><br>
	<input type="password" name="password" placeholder="password"><br>
	<input type="password" name="password_confirmation" placeholder="confirm password"><br>
	<input type="submit" name="resgistrarse" value="Registrarse">

<br>
<br>
<hr>

holamundo123


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if ($users ?? '')
    <div class="alert alert-danger">
        <ul>
            @foreach ($users  ?? '' as $user)
                <li>{{ $user }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if ($msg1 ?? '')
    <div class="alert alert-danger">
        <ul>
            
                <li>{{ $msg1 ?? ''}}</li>
            
        </ul>
    </div>
@endif




</form>
</body>
</html>