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

    <div id="wrapper" class="toggled">
        
        @yield('content')
	</div><!-- #main page wrapper -->
	<div id="video-background" style="opacity: 0.4;position: fixed; z-index: -99; width: 100%; height: 100%" >
  <iframe frameborder="0" height="100%" width="100%" src="https://www.youtube.com/embed/eEGhgcMIt9s?playlist=eEGhgcMIt9s&autoplay=1&controls=0&showinfo=0&autohide=1&rel=0" frameborder="0" allowfullscreen></iframe>
  </div>
    </body>
</html>
