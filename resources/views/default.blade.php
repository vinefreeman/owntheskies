<!DOCTYPE html>
<html>
    <head>
        <title>FLIGHTDECK: own the skies</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>
    <body class="@yield('bodyClass')">
	    <div class="container">
            @if (Auth::check())
                <p><a href="/auth/logout" class="login"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Logout</a></p>
            @endif
	    	@yield('content')
	    </div>
    </body>
</html>
