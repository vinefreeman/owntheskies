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
        @if (Session::has('flash_message'))
            <div style="position: absolute; left: 30px; z-index:99; opacity 0.9" class="alert alert-success"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> &nbsp; {{ Session::get('flash_message') }}</div>
        @endif
            @if (Auth::check())
                <p><a href="/auth/logout" class="login"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Logout</a></p>
            @endif
	    	@yield('content')
	    </div>
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
        </script>
        <script>
            $('div.alert').delay(2000).animate({ "left": "-=300px" }, "slow" );
        </script>
    </body>
</html>
