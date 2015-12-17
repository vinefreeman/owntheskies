<!DOCTYPE html>
<html>
    <head>
        <title>FLIGHTDECK: own the skies</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/sidebar.css">
    </head>
    <body class="@yield('bodyClass')">

    <div id="wrapper" class="">
      <!-- Sidebar -->
    
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="{{ url('/') }}">
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span><Br />
                       FlightDeck
                    </a>
                </li>
                @if (Auth::check())
                <li>
                    {!! link_to_route('airports_path', 'AIRPORTS') !!}
                </li>
                <li>
                    <a href="#">ADMIN</a>
                </li>
                <hr />
                
                    <li>
                        <a href="/auth/logout" class="login"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><br />Logout<br />{{ Auth::user()->name }}</a>
                    </li>
               @endif
            </ul>
        </div>
         
        <!-- /#sidebar-wrapper -->
	    <div class="container" id="page-content-wrapper">
        @if (Session::has('flash_message'))
            <div style="position: absolute; right: 0px; top: 0px; margin: 15px; z-index:99; opacity 0.5" class="alert alert-info"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> {{ Session::get('flash_message') }}</div>
        @endif
       
            
            <a href="#menu-toggle" class="menutoggle" id="menu-toggle"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span></a>
	    	@yield('content')
	    </div>
        
</div><!-- #main page wrapper -->
<script src="//code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
        </script>
        <script>
            $('.alert').hide().fadeIn(300).delay(2500).animate({right:-300, opacity:"hide"}, 600);
        </script>
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
    </script>
    </body>
</html>
